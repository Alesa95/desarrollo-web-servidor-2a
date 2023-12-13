<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create videogame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $distribuidora = $_POST["distribuidora"];
        $precio = (double) $_POST["precio"];

        $sql = $_conexion -> prepare("INSERT INTO videojuegos VALUES (?,?,?)");
        $sql -> bind_param("ssd", $titulo, $distribuidora, $precio);
        $sql -> execute();

        $_conexion -> close();
    }
    ?>

    <div class="container">
        <h1>Nuevo videojuego</h1>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input class="form-control" type="text" name="titulo">
            </div>
            <div class="mb-3">
                <label class="form-label">Distribuidora</label>
                <input class="form-control" type="text" name="distribuidora">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input class="form-control" type="number" step="0.1" name="precio">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Crear">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>