<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hola mundo</h1>";
    ?>
    <h2>Qué tal</h2>
    <?php
    echo "<h3>Otro hola mundo</h3>";
    // Comentario
    /**
     * Comentario
     */
    # Comentario
    $entero = 1; # int
    $decimal = 1.5; # float
    $exponente = 3e5; # float

    //echo $exponente;

    var_dump($exponente);

    echo "<br><br>";

    /*$string1 = "Hola";
    $string2 = 'Hola';

    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1';
    echo "<br>";
    echo $string1 . " " . $string2;
    echo "<br>";

    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>";*/

    /*$array1 = [1,"2",3];
    $array2 = ["aa","b","c"];
    var_dump($array1);
    echo "<br><br>";
    var_dump($array2);*/

    /*$b = true;
    $c = false;

    var_dump($b);*/

    /*define("EDAD",25);
    ?>

    <?php
    echo EDAD;
    */
    /*
    $dia = date("l");
    $dia_es = "";

    switch($dia) {
        case "Monday": 
            $dia_es = "Lunes";
            break;
        case "Tuesday":
            $dia_es = "Martes";
            break
    }
    #echo $dia;
    switch($dia) {
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "Hoy $dia_es hay clase de web servidor";
            break;
        default:
            echo "Hoy $dia no hay clase de web servidor";
            break;
    }
*/
    echo "<br><br>";

    $d = date("l");
    $de = match($d) {
        "Monday" => "Lunes",
        "Wednesday" => "Miércoles",
    };
    echo $de;
    ?>
</body>
</html>