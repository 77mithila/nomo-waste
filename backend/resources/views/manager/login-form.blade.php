<form action="/login" method="post">
    <label>Username</label>
    <input name="username" type="text">
    <br>
    <label>Password</label>
    <input name="password" type="password">
    <br>
    <input type="submit" value="Login">
    @csrf
</form>

@if($message)
    <h3>{{$message}}</h3>
@endif
