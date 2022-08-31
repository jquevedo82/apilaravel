 @extends('layouts.master')
 <!--insertamos la plantilla app.blade.php-->
 @section('title', 'Blog')
 @section('meta-descripcion', 'Blog meta description')
 @section('body')


     <h1>Blog</h1>
     <div class="container">
         <main>
             <div class="py-5 text-center">
                 <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                     height="57">
                 <h2>Checkout form</h2>
                 <p class="lead">SE MOSTRARA EL LISTADO DE DATOS QUE EXISTEN SOBRE BLOGS</p>
             </div>

             <div class="row g-5">
                 <div class="col-lg-2"></div>
                 <div class="col-lg-8 ">
                     <h4 class="mb-3"><a href="{{ route('posts.create') }}">Create New Post</a></h4>
                     <form class="form-horizontal " novalidate>
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
                                     <div>
                                         <tr>
                                             <th scope="row">1</th>
                                             <td>{{ $post->title }}</td>
                                             <td><a href="{{ route('posts.show', $post) }}">View</a></td>
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
                     </form>
                 </div>
                 <div class="col-lg-2"></div>
             </div>
         </main>

         <footer class="my-5 pt-5 text-muted text-center text-small">
             <p class="mb-1">&copy; 2017–2022 Company Name</p>
             <ul class="list-inline">
                 <li class="list-inline-item"><a href="#">Privacy</a></li>
                 <li class="list-inline-item"><a href="#">Terms</a></li>
                 <li class="list-inline-item"><a href="#">Support</a></li>
             </ul>
         </footer>
     </div>
     <a href="{{ route('posts.create') }}">Create New Post</a>
 @endsection
