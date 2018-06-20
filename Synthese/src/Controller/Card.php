<?php
namespace FastFood\Controller;

use Endroid\QrCode\QrCode;
use FastFood\Application;
use FastFood\Entity\Card as CardEntity;

class Card extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      if (isset($_GET['ask'])) {

          $appUrl = $application->getConfig()->getConfig('app')['url'];

          $qrCode = new QrCode(sprintf(
              '%s/login?token=%s',
              $appUrl,
              $this->getUser()->getToken()
          ));
          $content = base64_encode($qrCode->writeString());

          $card = new CardEntity();
          $card
              ->setContent($content)
              ->setPrinted(false);

          $em = $application->getDatabase()->getEntityManager();
          $em->persist($card);

          $user = $this->getUser();
          $user->setCard($card);

          $em->flush();

          $this->setUser($user);

          header('Location: /card');
          die;
      }

      /*header('Content-Type: '.$qrCode->getContentType());
      echo $qrCode->writeString();
      die;*/

      return $this->render('users/card.html.twig', [
        'card' => $this->getUser()->getCard(),
        'card_content' => ($this->getUser()->getCard() instanceof CardEntity) ? base64_decode($this->getUser()->getCard()->getContent()) : null
    ]);
  }
}
