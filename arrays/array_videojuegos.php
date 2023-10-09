<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Videojuegos</title>
</head>
<body>
    <?php
    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Street Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Consola</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $c_nombre = array_column($juegos, 0);
            $c_consola = array_column($juegos, 1);
            $c_precio = array_column($juegos, 2);

            array_multisort($c_consola, SORT_ASC, 
                            $c_nombre, SORT_ASC,
                            $juegos);

            $c_precio = array_column($juegos, 2);

            array_multisort($c_precio, SORT_ASC, $juegos);

            foreach($juegos as $juego) {
                list($nombre, $consola, $precio) = $juego;
                echo "<tr>";
                echo "<td>$nombre</td><td>$consola</td><td>$precio</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>