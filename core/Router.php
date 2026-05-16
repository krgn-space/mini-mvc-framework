<?php declare(strict_types=1);

namespace core;

class Router
{
    private array $routes = [];

    public function get(string $path, array $handler): void
    {
        $this->applyRoute('GET', $path, $handler);
    }

    public function route(string $method, string $uri)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) {
                continue;
            }

            if (preg_match($route['path'], $path, $matches)) {
                [$controllerClass, $controllerMethod] = $route['handler'];

                $controller = new $controllerClass();
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                return call_user_func_array([$controller, $controllerMethod], $params);
            }
        }

        http_response_code(404);
        echo '<h1>404 - страница не найдена</h1>';
    }

    private function applyRoute(string $method, string $path, array $handler): void
    {
        $regular = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[^/]+)', $path);
        $path = '/^' . str_replace('/', '\/', $regular) . '$/';

        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
        ];
    }
}