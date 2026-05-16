<?php declare(strict_types=1);

namespace app\controllers;

class IndexController
{
    public function index()
    {
        echo '<h1>Works</h1>';
    }

    public function show($id)
    {
        echo '<h1>Show ' . $id . '</h1>';
    }
}