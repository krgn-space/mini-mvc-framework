<?php declare(strict_types=1);

namespace app\controllers;

use app\models\PostModel;

class PostsController
{
    public function index()
    {
        $posts = PostModel::allPosts();

        return view('posts/index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = PostModel::getPost((int)$id);

        if (!$post) {
            http_response_code(404);
            echo '<h1>404 - Пост не найден.</h1>';

            return;
        }

        return view('posts/show', ['post' => $post]);
    }
}