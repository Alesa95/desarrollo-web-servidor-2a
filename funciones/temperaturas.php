<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas</title>
</head>
<body>
    <?php
    function celsiusAFahrenheit (int|float $temperatura) : float {
        return ($temperatura * (9/5)) + 32;
    }

    function fahrenheitACelsius (int|float $temperatura) : float {
        return ($temperatura - 32) * (5/9);
    }

    function convertirTemperatura (int|float $temperatura, 
        string $unidadI, string $unidadF) : float {

        $unidadI = strtoupper($unidadI);
        $unidadF = strtoupper($unidadF);

        $temperatura_final = match(true) {
            $unidadI == "C" && $unidadF == "F" => celsiusAFahrenheit($temperatura),
            $unidadI == "F" && $unidadF == "C" => fahrenheitACelsius($temperatura),
            $unidadI == $unidadF => $temperatura,
            default => -1000
        };
        return $temperatura_final;
    } 

    echo convertirTemperatura(25, "C", "F");
    ?>
</body>
</html>