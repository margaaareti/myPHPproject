<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()

    {
        return 'Стартовая страница';
    }

    public function create()

    {
        return "Создания страница";
    }

    public function show(): string

    {
        return "Показ страница";
    }

    public function store()

    {
        return "Хранения страница";
    }

    public function edit()

    {
        return "Редактировая страница";
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
