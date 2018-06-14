<?php

use FastFood\Controller\Homepage;
use FastFood\Controller\Login;

return [
    '/' => [
        'handler' => Homepage::class,
        'methods' => ['GET']
    ],

     '/login' => [
        'handler' => Login::class,
        'methods' => ['GET', 'POST']
    ],
        '/menuburger' => [
        'handler' => MenuBurger::class,
        'methods' =>['GET']
    ],
];
