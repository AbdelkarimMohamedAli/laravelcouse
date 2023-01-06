<h1>Create New Post</h1>

<!-- @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->

<form action="{{ route('posts.store')}}" method="post">
    @csrf
    <!-- <input type="text" name="title" placeholder="Enter Title"><br><br> -->
    <input d="title"i type="text" name="title" value="{{ old('title') }}" class="@error('title') is-invalid @enderror"><br><br>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input id="body" type="text" name="body" value="{{ old('body') }}" class="@error('body') is-invalid @enderror"><br><br>
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- <input type="text" name="body" placeholder="Enter Body"><br><br>-->
    <button type="submit">Submit</button>
</form>