<?php
namespace FastFood\Controller;

use FastFood\Application;
use FastFood\Entity\User;

class Login extends AbstractController
{
  public function __invoke(Application $application)
  {
    $em = $application->getDatabase()->getEntityManager();
    $userRepository = $em->getRepository(User::class);

    // the user sent the form
    if (count($_POST)) {
      if (empty($_POST['username']) || empty($_POST['password'])) {
        throw new \Exception('Veuillez remplir les champs obligatoires');
      }

      $user = $userRepository->findOneBy([
        'user_name' => $_POST['username']
      ]);

      if ($user instanceof User) {
        $_SESSION['user'] = $user;

        header('Location: /');
        die;
      } else {
        throw new \Exception('Nom d\'utilisateur ou mot de passe incorrect');
      }
    }
    return $this->render('users/login.html.twig', [
      'name' => 'Boris'
    ]);
  }
}
