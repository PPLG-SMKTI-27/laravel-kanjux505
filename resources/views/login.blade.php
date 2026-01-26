<!DOCTYPE html>
<html>
<head>
    <title>Login Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<div class="container">
    <h2>Login Portofolio</h2>

    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
