<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - Ejercicio 5</title>
</head>
<body>
    <?php
    function obtenerCalificacion (int|float $p_nota) : string {
        
        $calificacion = match(true) {
            $p_nota >= 0 && $p_nota < 5 => "Suspenso",
            $p_nota >= 5 && $p_nota < 7 => "Aprobado",
            $p_nota >= 7 && $p_nota < 9 => "Notable",
            $p_nota >= 9 && $p_nota <= 10 => "Sobresaliente",
            default => "Error"
        };
        return $calificacion;
    }

    $estudiantes = [
        ["Alberto", rand(0,10)],
        ["Nacho", rand(0,10)],
        ["Raúl", rand(0,10)],
        ["Adrián", rand(0,10)]
    ];

    $c_estudiante = array_column($estudiantes, 0);
    array_multisort($c_estudiante, SORT_ASC, $estudiantes);
    /*
    print_r($estudiantes);

    $estudiantes_2 = [
        ["Alberto"],
        ["Nacho"],
        ["Raúl"],
        ["Adrián"]
    ];
    for($i = 0; $i < count($estudiantes_2); $i++) {
        $estudiantes_2[$i][1] = rand(0,10);
    }
    print_r($estudiantes_2);
    */
    ?>

    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($estudiantes as $estudiante) {
                list($l_estudiante, $l_nota) = $estudiante;
                echo "<tr>";
                echo "<td>$l_estudiante</td>";
                echo "<td>$l_nota</td>";
                echo "<td>" . obtenerCalificacion($l_nota) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>