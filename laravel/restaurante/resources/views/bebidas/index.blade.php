<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bebidas</title>
</head>
<body>
    <h1>Este es el index de las bebidas</h1>

    <table>
        <thead>
            <tr>
                <th>Bebida</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bebidas as $bebida)
                @php
                    list($l_bebida, $l_precio, $l_tipo) = $bebida;
                @endphp
                <tr>
                    <td>{{ $l_bebida }}</td>
                    <td>{{ $l_precio }}</td>
                    <td>{{ $l_tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>