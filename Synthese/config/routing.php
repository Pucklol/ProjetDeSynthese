<?php

use FastFood\Controller\Homepage;

return [
    '/' => [
        'handler' => Homepage::class,
        'methods' => ['GET']
    ],

    /*
     '/menus' => [
        'handler' => MenuList::class,
        'methods' => ['GET']
    ]
    */
];
