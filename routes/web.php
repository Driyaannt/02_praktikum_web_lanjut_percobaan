<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Route::get('/hello', function () {
//    return view('hello', ['name' => 'Driya']);
//    });
//
//return View::make('hello', ['name' => 'Ananta']);

//Route::get('/hello', function () {
//    return view('blog.hello', ['name' => 'Andi']);
//});

//Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/app', function (){
    return view('layouts.app');
});

Route::get('/alert', function (){
    return view('components.alert', ['slot' => 'Berhasil']);
});

Route::get('/btn', function (){
    return view('components.button');
});


Route::get('/child', function (){
    return view('child');
});
