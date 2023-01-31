<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница список постов';
    }

    public function create()
    {
        return 'Страница создания поста';
    }

    public function store()
    {
        return 'Страница создания поста';
    }

    public function show($post)
    {

        return 'Страница просмотра поста ' . $post;
    }
    public function edit($post)
    {
        return 'Страница изменения поста ' . $post;
    }
    public function update()
    {
        return 'Страница создания поста';
    }
    public function delete()
    {
        return 'Страница создания поста';
    }

    public function like()
    {
        return 'Страница создания поста';
    }
}
