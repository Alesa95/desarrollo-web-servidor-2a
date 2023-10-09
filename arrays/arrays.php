<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $array1 = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3'
    );

    array_push($array1, 'value4', 'value5');
    $array1['key4'] = 'value4';
    $array1['key3'] = 'VALUE3';
    unset($array1['key2']);
    #$array1 = array_values($array1);

    $array2 = array('value1', 'value2', 'value3');

    print_r($array1);

    print("<br><br>");

    print_r($array2);
    ?>
</body>
</html>