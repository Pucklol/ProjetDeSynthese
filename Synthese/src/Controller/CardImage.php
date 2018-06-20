<?php
namespace FastFood\Controller;

use FastFood\Application;

class CardImage extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      header('Content-Type: image/png');
      echo base64_decode($this->getUser()->getCard()->getContent());
      die;
  }
}
