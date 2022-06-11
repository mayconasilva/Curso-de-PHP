<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
    <link rel="shortcut icon" href="../images/download.png" >
</head>
<body>
    <h1>Funções Matemáticas em PHP</h1>

    <?php

    $var1 = $_GET["x"];
    $var2 = $_GET["y"];

    echo "<h1>Valores Recebidos: $var1 e $var2 </h2>";

    echo "O valor absoluto de $var2 é igual a ". abs($var2);

    echo " <br> O valor de $var1 <sup> $var2 </sup> é igual a " . pow($var1, $var2);

    echo "<br> A raiz de $var1 é igual a ". sqrt($var1);

    echo "<br> O valor de $var1 arredondado é igual a " . round($var1);

    echo "<br> O valor inteiro de $var1 é igual a " . intval($var1);

    echo "<br> O valor de $var1 em moeda é igual a R$" . number_format($var1, 2, ",", ".");

?>
    
</body>
</html>