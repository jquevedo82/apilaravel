<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    
    @if (session('status'))
        <div >
            {{ session('status') }}
        </div>
    @endif
    <div class="row mx-auto"  style="width: 800px;">
       
            {{ $slot }}
 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
