<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
</head>
<body>
    <ul>
        @foreach($films as $film)
            <li>{{ $film->title }}</li>
            @php 
                $actors = $film->actors;
            @endphp
            @foreach($actors as $actor)
                <ul>
                    <li>{{ $actor->first_name }}</li>
                </ul>
            @endforeach
        @endforeach
    </ul>
</body>
</html>