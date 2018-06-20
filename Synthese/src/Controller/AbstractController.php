<?php
namespace FastFood\Controller;

use FastFood\Application;
use FastFood\Entity\User;

abstract class AbstractController
{
  /**
   * @var Application
   */
  protected $app;

  public function __construct(Application $app)
  {
    $this->app = $app;
  }

  abstract public function __invoke(Application $app);

  public function render(string $templateName, array $vars = [])
  {
      $app = [];

      $app['user'] = $this->getUser();
      $app['cart'] = $_SESSION['cart'] ?? [];

      $app['cart'] = array_map(function ($item) {
        return unserialize($item);
      }, $app['cart']);

      $vars['app'] = $app;

      return $this->app->getView()->getTemplateString($templateName, $vars);
  }

    protected function ensureUserIsConnected()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
        }
    }

    protected function getUser():? User
    {
        return isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;
    }

    protected function setUser(User $user):? User
    {
        $_SESSION['user'] = serialize($user);

        return $this->getUser();
    }
}
