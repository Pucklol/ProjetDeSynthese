<?php
namespace FastFood\Controller;

use FastFood\Application;

class Logout extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      session_destroy();
      header('Location: /');
  }
}
