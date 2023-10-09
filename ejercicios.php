<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <ul>
    <?php
    for($i = 1; $i <= 20; $i++) {
        if($i % 2 != 0) {
            echo "<li>$i</li>";
        }
    }
    ?>
    </ul>
    <br><br>
    <ul>
    <?php
    for($i = 1; $i <= 20; $i++) {
        if($i % 2 != 0) { 
        ?>
        <li><?php echo $i ?></li>     
        <?php 
        }
    }
    ?>
    </ul>
    <br><br>
    
</body>
</html>