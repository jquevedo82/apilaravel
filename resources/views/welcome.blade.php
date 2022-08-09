{{-- @extends('layouts.app')
<!--insertamos la plantilla app.blade.php-->
@section('title', 'Home')
@section('meta-descripcion', 'Home meta description')
@section('content')
    <h1>Inicio, Hola Mundo desde Laravel</h1>
@endsection --}}

<x-layouts.app title="Home" meta-description="Home meta description">
    {{-- <x-slot name="title">
        Home
    </x-slot> --}}


    <h1>Inicio, Hola Mundo desde Laravel</h1>
</x-layouts.app>

