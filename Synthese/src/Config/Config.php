<?php
namespace FastFood\Config;

class Config
{
  protected $config=  [];

  /**
   * Load the configuration
   *
   * @param string $directory
   * @return Config
   * @throws \Exception
   */
  public function load(string $directory): self
  {
    if (!is_dir($directory)) {
      throw new \Exception(sprintf(
        'Directory %s does not exists',
        $directory
      ));
    }
    
    // TODO manage recursion
    $files = glob($directory . '/*.php');

    foreach ($files as $file) {
      $this->config[pathinfo($file, PATHINFO_FILENAME)] = require $file;
    }

    return $this;
  }

  /**
   * @param null $categ
   * @return array
   */
  public function getConfig($categ = null): array
  {
    if ($categ) {
      return $this->config[$categ] ?? [];
    }

    return $this->config;
  }

  /**
   * @param array $config
   *
   * @return $this
   */
  public function setConfig(array $config): self
  {
    $this->config = $config;

    return $this;
  }
}