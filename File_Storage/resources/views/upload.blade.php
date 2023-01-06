<form action="{{ route('photo.save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo">
    <button type="submit">Submit</button>
</form>
