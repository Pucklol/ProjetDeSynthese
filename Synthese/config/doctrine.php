<?php
return [
    'isDevMode'   => true,
    'driver'   => 'pdo_mysql',
    'host' => '127.0.0.1',
    'port' => 3307,
    'user'     => 'root',
    'password' => 'toor',
    'dbname'   => 'synthese',
    'path'   => [dirname(__DIR__) . '/src/Entity'] ,
];