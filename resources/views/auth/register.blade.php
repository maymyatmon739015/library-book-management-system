<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Name" required>
    </div>
    <div>
        <input type="email" name="email" placeholder="Email" required>
    </div>
    <div>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <div>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    </div>
    <button type="submit">Register</button>
</form>

<a href="{{ route('login.view') }}">Already have an account? Login</a>
</body>
</html>

