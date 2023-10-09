<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma 3</title>
    <?php require 'max3.php'; ?>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Número 1</label>
        <input type="number" step="1" name="num1" id="num1"><br>
        <label for="num2">Número 2</label>
        <input type="number" step="1" name="num2" id="num2"><br>
        <label for="num3">Número 3</label>
        <input type="number" step="1" name="num3" id="num3"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = (int) $_POST["num1"];
        $num2 = (int) $_POST["num2"];
        $num3 = (int) $_POST["num3"];
        echo max3($num1, $num2, $num3);
    }
    ?>
</body>
</html>