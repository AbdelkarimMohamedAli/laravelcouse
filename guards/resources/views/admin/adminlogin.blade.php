<form action="{{route('save.admin.login')}}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">login admin</button>

</form>