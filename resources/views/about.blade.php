<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About POS</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customer Accounts</a>
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>
    <h1>About This Application</h1>
    <p>This Point of Sale (POS) application is built using Laravel framework principles, MVC architecture, and Blade templating.</p>
</body>
</html>