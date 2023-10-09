<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Arrays</title>
</head>
<body>
    <?php
    $numeros = [];
    for($i = 1; $i <= 50; $i++) {
        if($i % 2 == 0) {
            array_push($numeros, $i);
        }
    }
    shuffle($numeros);
    rsort($numeros);
    print_r($numeros);
    ?>
</body>
</html>