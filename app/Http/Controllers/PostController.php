<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){

    $posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Trird post'],
        ['title' => 'Fourth post'],
    ];
    return view('blog',['posts'=>$posts]);

}
}
