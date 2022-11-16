<!-- 7 – Escreva um algoritmo em PHP que receba uma temperatura em graus Celsius e 
apresente a temperatura convertida em graus Fahrenheit. 
Fórmula de conversão é F = (9 * C + 160) / 5, 
sendo F a temperatura em Fahrenheit e C a temperatura em Celsius -->

<!DOCTYPE html>
<head>
    <title>Questão 7</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 7</h1>';

$celsius = 34.9;

$fahrenheit = (9 * $celsius + 160) / 5;

echo 'Fahrenheit: ' . $fahrenheit;