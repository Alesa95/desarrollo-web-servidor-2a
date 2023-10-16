<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
    <?php require '../funciones/potencia.php'; ?>
</head>
<body>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //$base = (int) $_POST["base"];
        //$exponente = (int) $_POST["exponente"];
        //echo "$base elevado a $exponente es " . potencia($base, $exponente);

        $temp_base = depurar($_POST["base"]);
        $temp_exponente = depurar($_POST["exponente"]);
        
        if(strlen($temp_base) > 0) {
            // se ha introducido la base
            // comprobamos si se ha introducido un número
            if(is_numeric($temp_base)) {
                // se ha introducido y ademas es un numero
                // comprobamos que se ha introducido un numero correcto
                $temp_base = (int)$temp_base;
                if($temp_base >= 0) {
                    //  EXITO!
                    $base = $temp_base;
                } else {
                    $err_base = "El número debe ser igual o mayor que 0";
                }
            } else {
                // se ha introducido pero no es un numero
                $err_base = "El tipo del dato no es correcto";
            }
        } else {
            // no se ha introducido nada
            $err_base = "No se ha introducido la base";
        }

        if(strlen($temp_exponente) > 0) {
            // se ha introducido la base
            // comprobamos si se ha introducido un número
            if(is_numeric($temp_exponente)) {
                // se ha introducido y ademas es un numero
                // comprobamos que se ha introducido un numero correcto
                $temp_exponente = (int)$temp_exponente;
                if($temp_exponente >= 0) {
                    //  EXITO!
                    $exponente = $temp_exponente;
                } else {
                    $err_exponente = "El número debe ser igual o mayor que 0";
                }
            } else {
                // se ha introducido pero no es un numero
                $err_exponente = "El tipo del dato no es correcto";
            }
        } else {
            // no se ha introducido nada
            $err_exponente = "No se ha introducido el exponente";
        }

        if(isset($base) && isset($exponente)) {
            echo "El resultado es " . potencia($base, $exponente);
        }
    }

    function depurar($entrada) {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }
    ?>

    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" id="base" name="base">
        <?php if(isset($err_base)) echo $err_base ?>
        <br>
        <label for="exponente">Exponente</label>
        <input type="text" id="exponente" name="exponente">
        <?php if(isset($err_exponente)) echo $err_exponente ?>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>