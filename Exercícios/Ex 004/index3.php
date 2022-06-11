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

        h2{
            color: #1B0140;

        }
    </style>
</head>
<body>

<h1>Operadores de Atribuição</h1>
<h2>Variáveis Referenciais</h2>
<h3>Não Referenciado</h3>

<?php

$a = $_GET["a"]; //Pegando informação através da URL
$b = $a;
$b += 5;


echo "A vale $a ";

echo "B vale $b";


echo "<h3> Referenciado </h3>" ;

$a = $_GET["a"]; //Pegando informação através da URL
$b = &$a;
$b += 5;


echo "A vale $a ";

echo "B vale $b";



?>
    
</body>
</html>