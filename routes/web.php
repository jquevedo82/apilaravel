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
Route::get('/blog', [PostController::class,'index'])->name('blog');
Route::view('/about', 'about')->name('about');

/*Route::get('/', function () {
    // no logic
    return 'index'; culaquier dato array etc
    return view('welcome');
});*/
