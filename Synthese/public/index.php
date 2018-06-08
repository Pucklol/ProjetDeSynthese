<?php
session_start();

use FastFood\Application;
use FastFood\Config\Config;

chdir(dirname(__DIR__));

require_once dirname(__DIR__) .'/vendor/autoload.php';

$config = new Config();
$config->load(dirname(__DIR__) . '/config');

$app = new Application();
$app->setConfig($config);

$app->init();
