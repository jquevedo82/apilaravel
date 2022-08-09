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

    {{-- @dump($posts) --}}

    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach

</x-layouts.app>
