<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasa</title>
</head>
<body>
    <?php
    $apiUrl = "https://api.nasa.gov/planetary/apod";
    $apiKey = "bcBwt7bxbjnaai7KunRWQGCahK1gXerOrfN8qvTC";

    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $apiKey . ":");
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    print_r($array);
    ?>
</body>
</html>