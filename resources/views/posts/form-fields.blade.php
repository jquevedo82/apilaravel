<div class="mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $post->title) }}">
</div>
@error('title')
    <small style="color:red">{{ $message }}</small>
@enderror
<div class="mt-3">
    <label for="body" class="form-label">Body:</label>
    <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
</div>
@error('body')
    <small style="color:red">{{ $message }}</small>
    <br>
@enderror
