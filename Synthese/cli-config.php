<?php
// bootstrap.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once "vendor/autoload.php";

$em = include_once dirname(__FILE__) . '/bootstrap.php';

return ConsoleRunner::createHelperSet($em);
