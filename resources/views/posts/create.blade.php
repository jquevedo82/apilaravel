<x-layouts.app title="Create New Post" meta-description="Form for create new blog post">
    <h1>Create New Post</h1>
    {{--@dump($errors->all())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach--}}
    {{--@dump($post->toArray())--}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Create</button>
    </form>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
