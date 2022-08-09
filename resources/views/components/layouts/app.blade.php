<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>AppLaravel - @yield('title')</title> --}}
    <title>AppLaravel - {{$title ?? ''}}</title>
    {{-- <meta name="descipcion" content="@yield('meta-description','Default meta description')" /> --}}
    <meta name="descipcion" content="{{$metaDescription ?? 'Default meta description'}}" >
</head>

<body>
    {{-- @include('partials.nav') --}}
    <x-layouts.nav/>
    <!--contenido varible de cada pagina -->
    {{-- @yield('content') --}}

    {{ $slot }}
</body>

</html>