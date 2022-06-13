<?php

$num = $_GET["num"];
$rq = sqrt($num);

echo "A raiz quadrada de $num é igual a " .number_format($rq, 2);

?>

<a href="index.html">Voltar</a>