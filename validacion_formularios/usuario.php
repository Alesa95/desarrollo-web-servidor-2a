<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <?php
    function depurar($entrada) {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_usuario = depurar($_POST["usuario"]);
        $temp_edad = depurar($_POST["edad"]);

        if(!strlen($temp_usuario) > 0) {
            $err_usuario = "El nombre de usuario es obligatorio";
        } else {
            $patron = "/^[a-zA-Z0-9]{4,8}$/";
            if(!preg_match($patron, $temp_usuario)) {
                $err_usuario = "El nombre debe tener entre 4 y 8 caracteres
                    y contener solamente letras o números";
            } else {
                $usuario = $temp_usuario;
                echo $usuario;
            }
        }
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <label>Usuario: </label>
            <input type="text" name="usuario">
            <?php if(isset($err_usuario)) echo $err_usuario ?>
            <br><br>
            <label>Edad: </label>
            <input type="text" name="edad"><br><br>
            <input type="submit" value="Registrarse">
        </fieldset>
    </form>
</body>
</html>