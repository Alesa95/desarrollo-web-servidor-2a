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
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
        #   Si los apellidos tienen espacios en blanco de más de por medio
        #   los eliminamos con preg_replace
        $temp_apellidos = preg_replace("/[ ]{2,}/", ' ', $temp_apellidos);
        $temp_fecha_nacimiento = depurar($_POST["fecha_nacimiento"]);
 
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

        #   Validación nombre
        if(strlen($temp_nombre) == 0) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            if(strlen($temp_nombre) > 30 || strlen($temp_nombre) < 2) {
                $err_nombre = "El nombre no puede tener más de 30 caracteres
                    o menos de 2";
            } else {
                $patron = "/^[a-zA-Z][a-zA-Z ]*[a-zA-Z]$/";
                if(!preg_match($patron, $temp_nombre)) {
                    $err_nombre = "El nombre solo puede contener letras o 
                        espacios en blanco";
                } else {
                    $temp_nombre = strtolower($temp_nombre);
                    $temp_nombre = ucwords($temp_nombre);
                    $nombre = $temp_nombre;
                }
            }
        }

        #   Validación apellidos
        if(strlen($temp_apellidos) == 0) {
            $err_apellidos = "El apellido es obligatorio";
        } else {
            if(strlen($temp_apellidos) > 30 || strlen($temp_apellidos) < 2) {
                $err_apellidos = "El apellido no puede tener más de 30 caracteres
                    o menos de 2";
            } else {
                $patron = "/^[a-zA-Z][a-zA-Z ]*[a-zA-Z]$/";
                if(!preg_match($patron, $temp_apellidos)) {
                    $err_apellidos = "El apellido solo puede contener letras o 
                        espacios en blanco";
                } else {
                    $temp_apellidos = strtolower($temp_apellidos);
                    $temp_apellidos = ucwords($temp_apellidos);
                    $apellidos = $temp_apellidos;
                }
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
            <input type="text" name="edad">
            <br><br>
            <label>Nombre: </label>
            <input type="text" name="nombre">
            <?php if(isset($err_nombre)) echo $err_nombre ?>
            <br><br>
            <label>Apellidos: </label>
            <input type="text" name="apellidos">
            <?php if(isset($err_apellidos)) echo $err_apellidos ?>
            <br><br>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha_nacimiento">
            <br><br>
            <input type="submit" value="Registrarse">
        </fieldset>
    </form>
    <?php
    if(isset($nombre) && isset($apellidos)) {
        echo "<h3>Nombre: $nombre</h3>";
        echo "<h3>Apellidos: $apellidos</h3>";
        var_dump($apellidos);
    }
    ?>
</body>
</html>