<?php
namespace FastFood\Controller;

use FastFood\Application;

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
    return $this->app->getView()->getTemplateString($templateName, $vars);
  }
}
