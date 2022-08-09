{{-- @extends('layouts.app') --}}
<!--insertamos la plantilla ap-->
{{-- @section('title', 'About') --}}

{{-- @section('meta-descripcion', 'About meta description') --}}

{{-- @section('content') --}}
    {{-- <h1>About</h1> --}}
{{-- @endsection --}}

{{-- slot una forma --}}
{{-- @component('components.layout') --}}
    {{-- <h1>About</h1> --}}
{{-- @endcomponent --}}

{{-- otra forma slot --}}
{{-- x dice q es en la carpetar components
    seguido del nombre del archivo--}}

<x-layouts.app title="Home" meta-description="About meta description">
    {{-- <x-slot name="title">
        Home
    </x-slot> --}}


    <h1>Home</h1>
</x-layouts.app>

