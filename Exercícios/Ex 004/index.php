<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="shortcut icon" href="../images/download.png" >
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2em;
            color: #1C1CFF;

        }

        h1{
            text-align: center;
            color: #1B0140;
        }
    </style>
</head>
<body>

<h1>Operadores de Atribuição</h1>

<?php

$preco = $_GET["a"];

$desconto = 0.10;

echo "O valor do produto é igual a R$" .number_format( $preco, 2);

$preco -= ($preco*$desconto);

echo "<br>Com o desconto de 10% o produto passará a valer R$" .number_format( $preco, 2);

?>
    
</body>
</html>