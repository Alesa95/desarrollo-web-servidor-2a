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
                <tr>
                    <td>{{ $bebida->nombre }}</td>
                    <td>{{ $bebida->precio }}</td>
                    <td>{{ $bebida->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>