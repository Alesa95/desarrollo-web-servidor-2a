<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción funciones</title>
</head>
<body>
    <?php
    function sumaDosV1 ($num1, $num2) {
        //  Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV2 (int $num1, int $num2) {
        //  Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV3 (int|float $num1, int|float $num2) {
        //  Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV4 (int|float $num1, int|float $num2) : int {
        //  Instrucciones
        return $num1 + $num2;
    }

    $resultado = sumaDosV4(1.5,3);
    echo "<h3>Resultado 1: $resultado</h3>";
    echo "<h3>Resultado 2: " . sumaDosV1(3,5) . "</h3>";
    ?>
</body>
</html>