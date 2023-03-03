<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;


class PostController extends Controller
{

    public function index()

    {

        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        $posts = array_fill(0,10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()

    {
        return view('user.posts.create');
    }

    public function show($post): string


    {

        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function store()

    {
        return "Хранения страница";
    }

    public function edit($post)

    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        return view('user.posts.edit', compact('post'));;
    }

    public function update()

    {
        return "Обновления страница";
    }

    public function delete()

    {
        return "Удаления страница";
    }

    public function like()

    {
        return "Лайк";
    }

}
