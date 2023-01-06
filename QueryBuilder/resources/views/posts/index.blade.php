<html>
    <title>All Posts</title>
    <head><!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <br>
    <a class="btn btn-danger" href="{{ route('posts.delete.all')}}" role="button">Delete All</a>
    <a class="btn btn-danger" href="{{ route('posts.delete.all.truncate')}}" role="button">Delete All Truncate</a><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Pro</th>
            

            </tr>
        </thead>
        <tbody>
             @foreach($posts as $post)
 

            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('post.edit',$post->id);}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="{{ url('post/delete',$post->id);}}" role="button">Delete</a>
                </td>
            </tr>

            @endforeach
           
        </tbody>
    </table>

    </body>
<html>












