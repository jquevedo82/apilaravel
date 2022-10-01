<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {        /*
    $posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Trird post'],
        ['title' => 'Fourth pos|'],
    ];*/
        // $posts = DB::table('posts')->get();
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        //return Post::find($post);
        // return Post::findOrFail($post);

        //       return $post;

        return view('posts.show', ['post' => $post]);
    }

    public function create(Post $post)
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        /* $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ], [
            'title.required' => 'Error titulo obligatorio',
            'title.min' => 'Error titulo al menos 4 caracteres',
            'body.required' => 'Error contenido obligatorio'

        ]);*/

        //        return request();
        //return $request; recibe el json del formulario
        //return $request->input('title');
        /*$post= new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();*/
        /*Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);*/
        Post::create($request->validated());
        //session()->flash('status', 'Post created!!'); //nombre del mensaje y mensaje
        // return redirect()->route('posts.index');
        //return to_route('posts.index');
        return to_route('posts.index')->with('status', 'Post created!!');
    }

    public function edit(Post $post)
    {
        //return Post::find($post);
        // return Post::findOrFail($post);

        //return $post;

        return view('posts.edit', ['post' => $post]);
    }

    public function UPDATE(SavePostRequest $request, Post $post)
    {
        /*$validated = $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ], [
            'title.required' => 'Error titulo obligatorio',
            'title.min' => 'Error titulo al menos 4 caracteres',
            'body.required' => 'Error contenido obligatorio'

        ]);*/
        //dd($validated);
        //        return request();
        //return $request; recibe el json del formulario
        //return $request->input('title');
        /*$post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();*/

        /*      $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
*/
        $post->update($request->validated());

        //session()->flash('status', 'Post Update!!'); //nombre del mensaje y mensaje
        //return to_route('posts.show', $post);
        return to_route('posts.show', $post)->with('status', 'Post Update!!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post Delete!!');
    }
}
