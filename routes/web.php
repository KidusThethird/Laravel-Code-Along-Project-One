<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings');
});


Route::get('hello/', function () {
    return response('<h4>Hello world2</h4>' , 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo','bar');
});




Route :: get('/posts', function(){
    return response()->json([
        'posts'=>[
            "title" => "Post One"
        ]
        ]);
});


Route::get('/search', function (Request $request) {
dd($request);

  //  return response('welcome');
});