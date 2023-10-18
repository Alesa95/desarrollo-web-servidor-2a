<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario IVA</title>
    <?php require '../funciones/iva.php' ?>
    <?php require '../funciones/irpf.php' ?>
</head>
<body>
    <?php
    function depurar($entrada) {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }
    ?>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["action"] == "iva") {
            $temp_precio = depurar($_POST["precio"]);
            if(isset($_POST["iva"])) {
                $temp_iva = depurar($_POST["iva"]);
            } else {
                $temp_iva = "";
            }

            #   Validación del precio
            if(!strlen($temp_precio) > 0) {
                $err_precio = "El precio es obligatorio";
            } else {
                if(!filter_var($temp_precio, FILTER_VALIDATE_FLOAT)) {
                    $err_precio = "El precio debe ser un número";
                } else {
                    //var_dump($temp_precio);
                    $temp_precio = (float) $temp_precio;
                    if($temp_precio < 0) {
                        $err_precio = "El precio debe ser mayor o igual que cero";
                    } else {
                        $precio = $temp_precio;
                    }
                }
            }
            #   Validación del IVA
            if(!strlen($temp_iva) > 0) {
                $err_iva = "El IVA es obligatorio";
            } else {
                $valores_validos_iva = ["GENERAL", "REDUCIDO", "SUPERREDUCIDO", "SIN IVA"];

                if(!in_array($temp_iva, $valores_validos_iva)) {
                    $err_iva = "El IVA no es correcto";
                } else {
                    $iva = $temp_iva;
                }
            }
        }
    }
    ?>
    
    <h2>Formulario IVA</h2>

    <form action="" method="post">
        <fieldset>
            <label>Precio: </label>
            <input type="text" name="precio" step="0.1">
            <?php if(isset($err_precio)) echo $err_precio ?>
            <br><br>
            <select name="iva">
                <option disabled selected hidden> -- ELIGE IVA -- </option>
                <option value="GENERAL">General</option>
                <option value="REDUCIDO">Reducido</option>
                <option value="SUPERREDUCIDO">Superreducido</option>
                <option value="SIN IVA">Sin IVA</option>
            </select>
            <?php if(isset($err_iva)) echo $err_iva ?>
            <br><br>
            <input type="hidden" name="action" value="iva">
            <input type="submit" value="Calcular">
            <?php
            if(isset($precio) && isset($iva)) {
                echo "<h3>" . precioConIVA($precio, $iva) . "</h3>";
            }
            ?>
        </fieldset>
    </form>

    <h2>Formulario IRPF</h2>

    <form action="" method="post">
        <fieldset>
            <label>Salario: </label>
            <input type="number" step="1000" name="salario"><br><br>
            <input type="hidden" name="action" value="irpf">
            <input type="submit" value="Calcular">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST["action"] == "irpf") {
                    $salario = (float) $_POST["salario"];
                    echo "<h3>" . salarioSinIRPF($salario) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>
    <?php
    ?>
</body>
</html>