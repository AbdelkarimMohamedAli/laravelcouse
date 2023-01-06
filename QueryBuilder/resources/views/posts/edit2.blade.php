<h1>Edit Post2 : {{ $post->title }}</h1>


<form action={{ url('posts2/' . $post->id); }} method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" ><br><br>
    <input type="text" name="body" value="{{ $post->body }}" ><br><br>
    <button type="submit">Submit</button>
</form>
