<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <form action="" method="get">
        <label>Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label>Apellidos</label>
        <br>
        <input type="text" name="apellidos">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h3>Formulario enviado!</h3>";
        $nombre = (int) $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        echo "<h4>$nombre $apellidos</h4>";
    }
    ?>
</body>
</html>