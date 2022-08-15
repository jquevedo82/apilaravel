{{-- @extends('layouts.app')
<!--insertamos la plantilla app.blade.php-->
@section('title', 'Blog')
@section('meta-descripcion', 'Blog meta description')
@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="Blog meta description">
    {{-- <x-slot name="title">
        Home
    </x-slot> --}}


    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    {{-- @dump($posts) --}}

    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2><a href="{{ route('posts.show',$post) }}">{{ $post->title }}</a></h2>
            &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            &nbsp;
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

</x-layouts.app>
