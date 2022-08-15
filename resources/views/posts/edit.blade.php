<x-layouts.app :title="$post->title" :meta-description="$post->body">
    {{--@dump($post->toArray())--}}
    <form action="{{ route('posts.update',$post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Edit Post</button>
    </form>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
