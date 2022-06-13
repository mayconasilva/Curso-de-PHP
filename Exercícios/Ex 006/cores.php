<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Formatado</title>
    <?php
    $text = $_GET["textl"];
    $cor = $_GET["cor"];
    $tam = $_GET["tam"];

   echo" <style>
        p{
        font-family: Arial, Helvetica, sans-serif;
        color: $cor;
        font-size: $tam;
        }
    </style>";

    ?>
</head>
<body>

<?php

echo "<p>$text</p>";

?>

<a href="index.html">Voltar</a>
    
</body>
</html>