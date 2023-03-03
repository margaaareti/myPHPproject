<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()

    {

        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
            ];

        $posts = array_fill(0,10, $post);

        //dd($posts);

        return view('blog.index', compact('posts'));

    }


    public function show($post)

    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        return view('blog.show', compact('post'));
    }


    public function like($post): string

    {
        return "Показ страница";
    }
}
