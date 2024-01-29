<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random anime</title>
</head>
<body>
    <?php
    $apiUrl = "https://api.jikan.moe/v4/random/anime";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    //var_dump($array);
    $anime = $array['data'];
    $titulo = $anime['title'];
    $imagen = $anime['images']['jpg']['image_url'];
    ?>

    <h1><?php echo $titulo ?></h1>
</body>
</html>