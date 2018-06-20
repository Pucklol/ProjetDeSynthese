<?php

use FastFood\Controller\Card;
use FastFood\Controller\CardImage;
use FastFood\Controller\Cart;
use FastFood\Controller\Homepage;
use FastFood\Controller\Login;
use FastFood\Controller\Logout;
use FastFood\Controller\MenuBurger;
use FastFood\Controller\Order;
use FastFood\Controller\ValidateOrder;

return [
    '/' => [
        'handler' => Homepage::class,
        'methods' => ['GET']
    ],

    '/login' => [
        'handler' => Login::class,
        'methods' => ['GET', 'POST']
    ],
    '/logout' => [
        'handler' => Logout::class,
        'methods' => ['GET']
    ],
    '/card' => [
        'handler' => Card::class,
        'methods' => ['GET']
    ],
    '/cart' => [
        'handler' => Cart::class,
        'methods' => ['GET']
    ],
    '/validate' => [
        'handler' => ValidateOrder::class,
        'methods' => ['GET']
    ],
    '/order' => [
        'handler' => Order::class,
        'methods' => ['GET']
    ],
    '/qrcode' => [
        'handler' => CardImage::class,
        'methods' => ['GET']
    ],
    '/menuburger' => [
        'handler' => MenuBurger::class,
        'methods' =>['GET']
    ],
];
