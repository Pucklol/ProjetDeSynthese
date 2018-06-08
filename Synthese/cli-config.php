<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use FastFood\Application;
use FastFood\Config\Config;

require_once __DIR__ .'/vendor/autoload.php';

$config = new Config();
$config->load(__DIR__ . '/config');

$app = new Application();
$app->setConfig($config);

$app->init(false);

return ConsoleRunner::createHelperSet($app->getDatabase()->getEntityManager());
