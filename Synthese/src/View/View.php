<?php
namespace FastFood\View;

use Twig_Environment;
use Twig_Loader_Filesystem;

class View
{
  /** @var Twig_Environment */
  protected $twig;

  public function __construct(array $config)
  {
    $loader = new Twig_Loader_Filesystem($config['templateDirectory']);
    $options = [];

    if ($config['enableCache']) {
      $options['cache'] = $config['cacheDirectory'];
    }

    $this->twig = new Twig_Environment($loader, $options);
  }

  public function getTemplateString(string $templateName, array $vars = []): string
  {
    return $this->twig->render($templateName, $vars);
  }

}
