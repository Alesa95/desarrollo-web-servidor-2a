<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
</head>
<body>
    <?php
    /**
     * Primera versión de la función 'primos'.
     * 
     * Muestra por pantalla los números primos entre 
     * 1 y $limite.
     */
    function primosV1(int $limite) {
        for($i = 2; $i <= $limite; $i++) {
            $primo = true;
            for($j = 2; $j <= $i-1 && $primo; $j++) {
                if($i % $j == 0) {
                    $primo = false;
                }
            }
            if($primo) echo "$i ";
        }
    }

    /**
     * Segunda versión de la función 'primos'.
     * 
     * Devuelve un array con los números primos entre
     * 1 y $limite.
     */
    function primosV2(int $limite) : array {
        $primos = [];
        for($i = 2; $i <= $limite; $i++) {
            $primo = true;
            for($j = 2; $j <= $i-1 && $primo; $j++) {
                if($i % $j == 0) {
                    $primo = false;
                }
            }
            if($primo) array_push($primos, $i);
        }
        return $primos; 
    }

    /**
     * Tercera versión de la función 'primos'.
     * 
     * Devuelve un array con los números primos entre
     * 1 y $limite, usando la función esPrimo para 
     * comprobar si el índice $i es primo o no.
     */
    function primosV3(int $limite) : array {
        $primos = [];
        for($i = 2; $i <= $limite; $i++) {
            if(esPrimo($i)) array_push($primos, $i);
        }
        return $primos; 
    }

    /**
     * Comprueba si un número es primo o no.
     * 
     * Devuelve true si es primo, y false y no lo es.
     */
    function esPrimo(int $numero) : bool {
        $primo = true;
        for($j = 2; $j <= $numero-1 && $primo; $j++) {
            if($numero % $j == 0) {
                $primo = false;
            }
        }
        return $primo;
    }

    $primos = primosV3(75);
    foreach($primos as $primo) {
        echo "$primo ";
    }
    ?>
</body>
</html>