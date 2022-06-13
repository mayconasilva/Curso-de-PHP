<?php

$nome = $_GET["name"];
$ano = $_GET["ano"];
$idade = date("Y") - $ano;
$sexo = $_GET["sexo"];

echo "$nome tem $idade anos de idade e é do sexo $sexo";

?>
<a href="index.html">Voltar</a>