<?php declare(strict_types=1);

namespace app\models;

class PostModel
{
    private static array $posts = [
        [
            'id' => 1,
            'title' => 'IT',
            'content' => 'Test post IT',
            'author' => 'John Doe'
        ],
        [
            'id' => 2,
            'title' => 'PHP',
            'content' => 'Test post PHP',
            'author' => 'Cody Doe'
        ],
        [
            'id' => 3,
            'title' => 'MySQL',
            'content' => 'Test post MySQL',
            'author' => 'Sam Doe'
        ],
        [
            'id' => 4,
            'title' => 'Web',
            'content' => 'Test post Web',
            'author' => 'Din Doe'
        ],
    ];

    public static function allPosts(): array
    {
        return self::$posts;
    }

    public static function getPost(int $id): ?array
    {
        $post = array_filter(self::$posts, fn($post) => $post['id'] === $id);

        return array_shift($post) ?? null;
    }
}