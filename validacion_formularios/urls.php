<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLs</title>
</head>
<body>
    <form action="" method="post">
        <label>URL</label><br>
        <input type="text"
            minlength="10"
            maxlength="50"
            pattern="(https|http):\/\/(www\.)?[a-zA-Z]+\.(com|es|net)" 
            title="La URL está mal escrita">
        <br><br>
        <input type="Submit" value="Enviar">
    </form>
</body>
</html>