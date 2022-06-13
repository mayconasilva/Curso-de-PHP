<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
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

<h1>Operadores Relacionais</h1>

<h2>Exemplo 1</h2>

<?php

$n1 = $_GET["a"];
$n2 = $_GET["b"];
$op = $_GET["op"];

echo "Os valores passados foram $n1 e $n2 <br>";

$r = ($op == "s") ? $n1+$n2 : $n1*$n2;

echo "O resultado será $r"

?>

<h2>Exemplo 2</h2>

<?php

$n1 = 3;
$n2 = "3";

$v = ($n1 === $n2)? "sim":"não";

echo "As variáveis $n2 e $n2 são iguais? $v";



?>

<h2>Exemplo 3</h2>


<?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];

$ap = (($nota1 + $nota2)/2 >= 5) ? "Aprovado":"Reprovado";

echo "As notas foram $nota1 e $nota2. Ele foi $ap.";

?>

<h1>Operadores Lógicos</h1>

<h2>Exemplo 1</h2>


<?php

$ano = $_GET["ano"];

$idade = 2022 - $ano;

$res = ($idade >= 18 && $idade < 65 ) ? "Obrigatório":"Facultativo";

echo "Atualmente você tem $idade anos e o seu voto é $res"


?>
    
</body>
</html>