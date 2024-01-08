<?php

namespace app\Core\Routes;

class Router
{
    public function getUri(): string
    {
        return \trim($_SERVER['REQUEST_URI']);
    }

    public function dispatch(string $uri): void
    {
        $parts = \parse_url($this->getUri());

        $segments = $parts['path'] === '/'
            ? 'Home'
            : \explode('/', \trim($parts['path'], '/'));

        $namespace = 'app\Controller\\';

        $method = '';
        $class = $namespace . \ucfirst(\substr($segments[0], 0, \strlen($segments[0]) - 1)) . 'Controller';

        $params = !empty($_POST) ? $_POST : null;

        if ($segments === 'Home') {
            $class = $namespace . 'HomeController';
            $method = 'index';
        } else {
            if (\count($segments) === 1) {
                if (!\class_exists($class)) {
                    $class = $namespace . 'HomeController';
                    $method = 'catchError';
                } else {
                    $method = 'index';
                }
            } elseif (\count($segments) === 2) {
                $method = 'render';
                $params = [$segments[1], $segments[1]];
            } elseif (\count($segments) === 3) {
                $params = $segments[2];
                $method = $segments[1];
            }
        }

        $controller = new $class();

        echo $controller->{$method}(...$params ?? null);
    }

}
