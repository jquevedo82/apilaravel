<?php

use App\Http\Controllers\PostController;
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
//apiLaravel.test => welcome
//apiLaravel.test/contact => contact
//apiLaravel.test/blog => blog
//apiLaravel.test/about => about



Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/blog', 'blog',['posts'=>$posts])->name('blog');

/*
Route::get('/blog', [PostController::class,'index'])->name('posts.index');//metodo index para listado de recursos
Route::get('/blog/create',[PostController::class,'create'])->name('posts.create');//debe ir primero porq si
Route::post('/blog',[PostController::class, 'store'])->name('posts.store');//store almacenar
//busca un post llamado create
Route::get('/blog/{post}', [PostController::class,'show'])->name('posts.show');//metodo show para mostar el detalle de un recurso
Route::get('/blog/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
Route::patch('/blog/{post}',[PostController::class, 'update'])->name('posts.update');//update modifica
Route::delete('/blog/{post}',[PostController::class, 'destroy'])->name('posts.destroy');//destroy elimina
*/
//Route::resource('posts',PostController::class); // esto es lo mismo q arriba los 7 methodos o routas
Route::resource('blog',PostController::class,[
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about', 'about')->name('about');

/*Route::get('/', function () {
    // no logic
    return 'index'; culaquier dato array etc
    return view('welcome');
});*/
