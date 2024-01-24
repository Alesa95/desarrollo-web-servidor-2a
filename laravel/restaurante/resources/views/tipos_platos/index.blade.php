<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos Platos</title>
</head>
<body>
    <h1>Tipos de platos</h1>

    <ul>
        @foreach($tipos_platos as $tipo_plato)
            <li>{{ $tipo_plato->tipo }}</li>
            <ul>
                @php 
                    $platos = $tipo_plato -> platos;
                @endphp
                @foreach($platos as $plato)
                    <li>{{ $plato -> nombre }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>