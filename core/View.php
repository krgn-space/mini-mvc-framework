<?php declare(strict_types=1);

namespace core;

class View
{
    public static function render(string $view, array $data = [])
    {
        $file = __DIR__ . '/../views/' . $view . '.php';

        extract($data);

        ob_start();
        require_once $file;
        $content = ob_get_clean();

        $layout = __DIR__ . '/../views/layout.php';

        require_once $layout;
    }
}