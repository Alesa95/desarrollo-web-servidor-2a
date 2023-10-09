<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Personas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    $personas = [
        "12345678G" => "García",
        "34245523H" => "Conchi",
        "96534465J" => "Paco Porras"
    ];
    ?>

    <ul>
    <?php
    /*foreach($personas as $persona):
        echo "<li>$persona</li>";
    endforeach;*/
    ?>
    </ul>

    <!-- Versión con las claves --> 

    <ul>
    <?php
    /*foreach($personas as $dni => $nombre):
        echo "<li>DNI: $dni, Nombre: $nombre</li>";
    endforeach;*/
    ?>
    </ul>

    <!-- Versión con tabla -->

    <h1>Tabla inicial</h1>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($personas as $dni => $nombre) {
            echo "<tr>";
            echo "<td>$dni</td><td>$nombre</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <h1>Tabla con SORT</h1>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $aux_personas = $personas;
        sort($aux_personas);
        foreach($aux_personas as $dni => $nombre) {
            echo "<tr>";
            echo "<td>$dni</td><td>$nombre</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <h1>Tabla con ASORT</h1>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $aux_personas = $personas;
        asort($aux_personas);
        foreach($aux_personas as $dni => $nombre) {
            echo "<tr>";
            echo "<td>$dni</td><td>$nombre</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <h1>Tabla con KSORT</h1>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $aux_personas = $personas;
        ksort($aux_personas);
        foreach($aux_personas as $dni => $nombre) {
            echo "<tr>";
            echo "<td>$dni</td><td>$nombre</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>