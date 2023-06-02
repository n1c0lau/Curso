<?php
 if (isset($_FILES['arquivo'])) 
 {
    $arquivo = $_FILES['arquivo'];
    if($arquivo['size'] > 2097152);
        die("Arquivo muito grande, mude. Máx 2MB");
    var_dump($_FILES['arquivo']);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form metheod="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
        <input type="file"></p>
        <button type="submit">Enviar arquivo</button>
    </form>
</body>
</html>