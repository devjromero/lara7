<h1>Login</h1>
<form action="/login" method="POST">
    @csrf
    <input type="text" name="email" value="test@gmail.com">
    <input type="text" name="password" value="123456">
    <button type="submit">Go</button>
</form>
