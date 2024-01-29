<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show anime</title>
</head>
<body>
    <?php
    $id = $_GET["id"];
    $apiUrl = "https://api.jikan.moe/v4/anime/$id/full";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    //var_dump($array);
    $anime = $array['data'];
    ?>

    <h1><?php echo $anime['title'] ?></h1>
    <p><?php echo $anime['synopsis'] ?></p>
    <p><img src="<?php echo $anime['images']['jpg']['image_url'] ?>"></p>
</body>
</html>