<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('posts.index') }}">Blog Post</a></li>
        <li><a href="{{ route('posts.create') }}">Add Blog Post</a></li>
    </ul>
    @if (session()->has('status'))
        <p style="color: green;">
            {{ session()->get('status') }}
        </p>
    @endif
    @yield('content')
</body>
</html>