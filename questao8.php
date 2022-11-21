<!-- 8 – Escreva um algoritmo em PHP que receba dois números (início e fim). 
Se o número do início for menor que o fim, 
escreva os números do menor para o maior; caso contrário, do maior para o menor. -->

<!DOCTYPE html>

<head>
    <title>Questão 8</title>
</head>

</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 8</h1>';


$numeroInicio = 8;
$numeroFim = 9;

if ($numeroInicio < $numeroFim)
    echo $numeroInicio . '<br>' . $numeroFim;
else 
    echo $numeroFim . '<br>' . $numeroInicio;