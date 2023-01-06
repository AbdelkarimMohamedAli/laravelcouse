<h1>Create New Post</h1>

<form action={{ route("post.insert") }} method="post">
    @csrf
    <input type="text" name="title" placeholder="enter title"><br><br>
    <input type="text" name="body" placeholder="enter body"><br><br>
    <button type="submit">Submit</button>
</form>