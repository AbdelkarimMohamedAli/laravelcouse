<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Path</th>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
        <tr>
            <th scope="row">{{ $image->id }}</th>
            <td> <img src=" {{ asset('imgs/'.$image->path) }} " height="80px" width="80px"></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>