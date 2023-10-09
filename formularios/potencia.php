<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
    <?php require '../funciones/potencia.php'; ?>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" id="base" name="base">
        <br>
        <label for="exponente">Exponente</label>
        <input type="text" id="exponente" name="exponente">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = (int) $_POST["base"];
        $exponente = (int) $_POST["exponente"];
        echo potencia($base, $exponente);
    }
    ?>
</body>
</html>