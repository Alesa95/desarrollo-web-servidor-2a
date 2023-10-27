<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Películas</title>
    <?php require 'pelicula.php' ?>
</head>
<body>
    <?php
    $pelicula1 = new Pelicula(1,"Spiderman","2020-01-01","7");
    $pelicula2 = new Pelicula(2,"Kung Fu Panda","2003-01-01","3");
    $pelicula3 = new Pelicula(3,"Batman","2010-04-02","18");

    $peliculas = [$pelicula1, $pelicula2, $pelicula3];
    ?>

    <table>
        <thead>
            <tr>
                <th>ID Película</th>
                <th>Título</th>
                <th>Fecha de estreno</th>
                <th>Edad recomendada</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($peliculas as $pelicula) {
                echo "<tr>";
                echo "<td>" . $pelicula -> id_pelicula . "</td>";
                echo "<td>" . $pelicula -> titulo . "</td>";
                echo "<td>" . $pelicula -> fecha_estreno . "</td>";
                echo "<td>" . $pelicula -> edad_recomendada . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>