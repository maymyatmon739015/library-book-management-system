<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>