<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function index(Request $request)
    {


        $foo = session('foo');



        return view('login.index');

    }


    public function store(Request $request)
    {


        alert(__('Добро пожаловать'));


        return redirect()->route('user');

    }

};


//$ip = $request->ip();
//$path = $request->path();
//$url = $request->url();
//$full = $request->fullurl();

//$email = $request->input('email');
//$password = $request->input('password');
//$remember = $request->boolean('remember');
