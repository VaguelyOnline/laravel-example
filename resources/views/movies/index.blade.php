<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Movies!
    </h1>
    <h2>
        {{ $message }}
    </h2>

    @foreach ($movies as $movie)
        <div>
            <li>{{ $movie->title }}</li>
            <img src="{{ $movie->poster }}">
        </div>
    @endforeach
</body>
</html>