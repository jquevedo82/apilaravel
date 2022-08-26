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
<div class="row">
    <div class="col-6">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Post</th>
            <th scope="col" colspan="3">Process</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($posts as $post)
        <div >
            <tr>
            <th scope="row">1</th>
            <td>{{ $post->title }}</td>
            <td><a href="{{ route('posts.show',$post) }}">View</a></td>
            <td><a href="{{ route('posts.edit', $post) }}">Edit</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-light">Delete</button>
                </form>
            </td>
            </tr>
        </div>
    @endforeach
</tbody>
</table>
</div></div>
</x-layouts.app>
