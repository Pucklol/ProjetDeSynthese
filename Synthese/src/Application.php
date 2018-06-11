<?php
namespace FastFood;

use FastFood\Config\Config;
use FastFood\Database\Database;
use FastFood\View\View;

class Application
{
  /**
   * @var Config
   */
  protected $config;

  /**
   * @var Database
   */
  protected $database;

  /**
   * @var View
   */
  protected $view;

  public function init($route = true)
  {
    $this->view = new View($this->config->getConfig('app')['templates'] ?? []);
    $this->database = (new Database())->createEm($this->config->getConfig('doctrine') ?? []);

    if ($route) {
      $this->route();
    }
  }

  protected function route()
  {
    $routes = $this->config->getConfig('routing');

    $dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) use ($routes) {
      foreach ($routes as $url => $info) {
        $methods = $info['methods'] ?? ['GET'];
        $r->addRoute($methods, $url, $info['handler']);
      }
    });

    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    if (false !== $pos = strpos($uri, '?')) {
      $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    switch ($routeInfo[0]) {
      case \FastRoute\Dispatcher::NOT_FOUND:
        throw new \Exception('No route found', 404);
        break;
      case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        throw new \Exception('Method not allowed. Allowed methods are (' . implode(',', $routeInfo[1]) . ')', 405);
        break;
      case \FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if (is_callable($handler)) {
          echo $handler($this);
        } elseif (is_string($handler) && class_exists($handler)) {
          $handler = new $handler($this);
          echo $handler($this);
        }

        break;
    }
  }

  /**
   * @return Config
   */
  public function getConfig(): Config
  {
    return $this->config;
  }

  /**
   * @param Config $config
   * @return Application
   */
  public function setConfig(Config $config): Application
  {
    $this->config = $config;

    return $this;
  }

  /**
   * @return View
   */
  public function getView(): View
  {
    return $this->view;
  }

  /**
   * @param View $view
   * @return Application
   */
  public function setView(View $view): self
  {
    $this->view = $view;

    return $this;
  }

  /**
   * @return Database
   */
  public function getDatabase(): Database
  {
    return $this->database;
  }

  /**
   * @param Database $database
   * @return Application
   */
  public function setDatabase(Database $database): self
  {
    $this->database = $database;

    return $this;
  }
}