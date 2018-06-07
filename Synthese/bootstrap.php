<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$dbParams = include_once dirname(__FILE__) . '/config/doctrine.php';

$paths = $dbParams['path'];

$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
return EntityManager::create($dbParams, $config);