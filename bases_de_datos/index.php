<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    $sql = $_conexion -> prepare("SELECT * FROM videojuegos");
    $sql -> execute();
    $resultado = $sql -> get_result();
    $_conexion -> close();
    ?>
    <div class="container">
        <input type="text">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fila = $resultado -> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $fila["titulo"] ?></td>
                        <td><?php echo $fila["distribuidora"] ?></td>
                        <td><?php echo $fila["precio"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>