<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()

    {
        return 'Стартовая страница';
    }

    public function show($post)

    {
        return "Создания страница";
    }

    public function like($post): string

    {
        return "Показ страница";
    }
}
