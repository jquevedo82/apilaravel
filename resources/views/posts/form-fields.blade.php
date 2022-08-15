<Label>
    Title: <br>
    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title',$post->title) }}">

    @error('title')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror

</Label>
<br>
<Label>
    Body: <br>
    <textarea name="body" id="body" >{{ old('body', $post->body) }}</textarea>
    @error('body')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
    <br>
</Label>
