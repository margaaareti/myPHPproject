<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

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

        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        alert((__('Сохранено')));

        return redirect()->route('user.posts.show', 123);
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

    public function store(Request $request)

    {

        $validator = validator($request->all(), [

        ]);


        $validated= $validator->validate();




        alert(__('Сохранено'));

        return redirect()->route('user.posts.show', 1 );
    }

    public function edit($post)

    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Dolores, molestiae.',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)

    {
        $title= $request->input('title');
        $content= $request->input('content');


        return back();

    }

    public function delete($post)

    {
        return redirect()->route('user.posts');
    }

    public function like()

    {
        return "Лайк";
    }

}
