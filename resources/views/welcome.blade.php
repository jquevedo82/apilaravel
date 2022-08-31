@section('title', 'Home')
@section('meta-descripcion', 'Home meta description')

@extends('layouts.master')

@section('body')
@if (session('status'))
<div >
    {{ session('status') }}
</div>
@endif
    <h1>Inicio, Hola Mundo desde Laravel</h1>
@endsection
