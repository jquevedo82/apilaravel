@extends('layouts.master')

@section('body')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Create</button>
    </form>

    <a href="{{ route('posts.index') }}">Regresar</a>
@stop
