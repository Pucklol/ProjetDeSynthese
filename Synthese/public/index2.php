<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$routes = include_once dirname(__DIR__) . '/config/routing.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($routes) {
    foreach ($routes as $url => $info) {
        $methods = $info['methods'] ?? ['GET'];
        $r->addRoute($methods, $url, $info['handler']);
    }
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        throw new \Exception('No route found', 404);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        throw new \Exception('Method not allowed. Allowed methods are (' . implode(',', $routeInfo[1]) . ')', 405);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if (is_callable($handler)) {
            $handler();
        } elseif (is_string($handler) && class_exists($handler)) {
            $handler = new $handler();
            $handler();
        }
        // ... call $handler with $vars
        break;
}

