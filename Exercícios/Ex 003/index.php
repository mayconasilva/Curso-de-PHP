<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="shortcut icon" href="../images/download.png" >
    <style>

        *{
            padding: 5px
        }
        body{
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2em
            
        }

        h1{
            text-align: center;
        }

        p{
            padding: 5px

        }
    </style>
</head>
<body>

<h1>Operadores Aritméticos</h1>

<?php


$n1 = $_GET["a"];
$n2 = $_GET["b"];

echo "<h2> Valores Recebidos: $n1 e $n2 <h2> </h2> ";


$soma = $n1 + $n2;
$sub = $n1 - $n2;
$mult = $n1 * $n2;
$div = $n1 / $n2;
$res = $n1 % $n2;
$me = $n1 + $n2 / 2;
$po = $n1 ** $n2;



echo "A soma entre " . $n1 . " e "  . $n2 . " é igual a " . $soma; 
echo " </br>A subtração entre " . $n1 . " e "  . $n2 . " é igual a " . $sub; 
echo " </br>A multiplicação entre " . $n1 . " e "  . $n2 . " é igual a " . $mult; 
echo " </br>A divisão entre " . $n1 . " e "  . $n2 . " é igual a " . $div; 
echo " </br>O resto da divisão entre " . $n1 . " e "  . $n2 . " é igual a " . $res; 
echo " </br>A média entre " . $n1 . " e " . $n2 . " é igual a ". $me;
echo " </br>" . $n1 . " elevado a " . $n2 . " é igual a ". $po;

?>

    
</body>
</html>