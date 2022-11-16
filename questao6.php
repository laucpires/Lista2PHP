<!-- 6 – Escreva um algoritmo em PHP que receba dois valores e exiba o intervalo entre eles. 
Considere sempre começar do menor para o maior -->

<!DOCTYPE html>
<head>
    <title>Questão 6</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 6</h1>';

$valor1 = 45;
$valor2 = 97;

for ($i = $valor1; $i <= $valor2; $i++) {
    echo $valor1++ . '<br>';
}