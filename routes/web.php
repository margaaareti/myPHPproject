<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

//простой показ страницы
Route::view('/', 'home.index')->name('home');

//перенаправляет с пути home на главную страницу
Route::redirect('/home', '/', 301 );

//при запросе по несуществующему роуту
Route:: fallback(function() {
   return 'Fallback';
});

Route::get('test', [TestController::class, 'index']) -> name('test');//->middleware('log');


Route::middleware('guest') -> group(function() {

    Route::get('register', [RegisterController::class, 'index']) -> name('register');
    Route::post('register', [RegisterController::class, 'store']) -> name('store');


    Route::get('login', [LoginController::class, 'index']) -> name('login')->middleware('guest')->withoutMiddleware('guest');
    Route::post('login', [LoginController::class, 'store']) -> name('login.store');
});

Route::get('register', [RegisterController::class, 'index']) -> name('register');
Route::post('register', [RegisterController::class, 'store']) -> name('store');


Route::get('login', [LoginController::class, 'index']) -> name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store']) -> name('login.store')->middleware('guest');

Route::get('blog', [BlogController::class, 'index']) -> name('blog');
Route::get('blog/{post}', [BlogController::class, 'store']) -> name('blog.show');
Route::post('register/{post}/like', [BlogController::class, 'store']) -> name('blog.like');



//Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation']) -> name('login.confirmation');
//Route::post('login/{user}/confirmation', [LoginController::class, 'confirmation']) -> name('login.confirmation');





