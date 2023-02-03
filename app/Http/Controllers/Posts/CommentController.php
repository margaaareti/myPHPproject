<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(): string
    {
        return "Meow";
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return "Показать комментарий комментарий {$id}";
    }


    public function edit($post, $comment)
    {
        return "Изменить комментарий {$comment} (пост {$post})";
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
