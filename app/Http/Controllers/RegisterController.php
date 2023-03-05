<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');

    }


    public function store(Request $request)
    {

        //$data = $request->all();
        //$data = $request->only(['name','email']);
        //$data = $request->except(['name','email']);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $agreement = $request->boolean('agreement');
        //$avatar = $request->file('avatar');

        dd($name,$email,$agreement, $password);

        // dd($request->has('name')); проверка на наличие параметра
        // dd($request->filled('name')); проверка на заполненность поля
        // dd($request->missing('name')); проверка на незаполненность поля

        return "Запрос на регистрацию";
    }

}
