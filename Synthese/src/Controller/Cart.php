<?php
namespace FastFood\Controller;

use FastFood\Application;

class Cart extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      if (isset($_GET['erase'])) {
          unset($_SESSION['cart']);
      }

      return $this->render('cart/cart.html.twig');
  }
}
