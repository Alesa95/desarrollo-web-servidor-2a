<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $film_id = $_GET['id'];
    $apiUrl = "http://localhost:8000/api/films/$film_id";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    $pelicula = $array['data'];
    
    echo "<h1>" . $pelicula['title'] . "</h1>";
    ?>
</body>
</html>