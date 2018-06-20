<?php
namespace FastFood\Controller;

use FastFood\Application;
use FastFood\Entity\Menu;

class Order extends AbstractController
{
  public function __invoke(Application $application)
  {
      $this->ensureUserIsConnected();

      if (!isset($_GET['menuId'])) {
          header('Location: /menuburger');
          die;
      }

      $id = $_GET['menuId'];

      $em = $application->getDatabase()->getEntityManager();
      $menuRepo = $em->getRepository(Menu::class);

      $menu = $menuRepo->findOneById((int)$id);
      
      if (!$menu instanceof Menu) {
          header('Location: /menuburger');
          die;
      }

      $_SESSION['cart'] = $_SESSION['cart'] ?? [];
      $_SESSION['cart'][] = serialize($menu);

      header('Location: /menuburger');
      die;
  }
}
