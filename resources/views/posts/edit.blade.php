@extends('layouts.master')

@section('body')
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Edit Post</button>
    </form>
    <a href="{{ route('posts.index') }}">Regresar</a>
@stop
