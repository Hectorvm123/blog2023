<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inici');

Route::get('posts', function() {
    return view("posts.index");
})->name('posts_llistat');

Route::fallback(function() {
    return view("404");
});

Route::get('posts/{id}', function($id) {
    return view("posts.show")->with(compact("id"));
})->where('id', "[0-9]+")->name('posts_fitxa');


Route::get('post/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('post/editarPrueba/{id}', [PostController::class, 'editarPrueba']);
Route::resource('post', PostController::class);


