<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
</head>
<body>
    <?php
    $apiUrl = "http://localhost:8000/api/films";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    //print_r($array);

    $peliculas = $array['data'];

    foreach($peliculas as $pelicula) { ?>
        <h1><?php echo $pelicula['title'] ?></h1>
    <?php } ?>
</body>
</html>