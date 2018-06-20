<?php
namespace FastFood\Controller;

use FastFood\Application;

class ValidateOrder extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      return $this->render('cart/validate.html.twig');
  }
}
