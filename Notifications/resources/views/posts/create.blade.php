<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder='enter title'><br>
    <input type="text" name="body" placeholder='enter body'><br>
    <button type="submit">submit</button>
</form>