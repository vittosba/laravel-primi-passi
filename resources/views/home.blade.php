<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>
    <nav>
        <ul>
            <li>
                <a href="/">HOME</a>
            </li>
            <li>
                <a href="{{ route('about') }}">ABOUT</a>
            </li>
        </ul>
    </nav>
</body>
</html>