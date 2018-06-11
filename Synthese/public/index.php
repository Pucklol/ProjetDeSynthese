<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: Scharff
 * Date: 07/06/2018
 * Time: 14:35
 */

include("menu.html");
include("corps.html");
include("footer.html");
=======
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
>>>>>>> 2ed0d85aa10f0ed58f6ec09cb82e1a5ea09a9ffb
