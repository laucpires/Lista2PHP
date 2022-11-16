<!-- 5 – Escreva um algoritmo em PHP que receba o preço de dois produtos. 
Calcule um desconto de 8% no primeiro produto, 
11% no segundo e apresente o valor final a ser pago -->

<!DOCTYPE html>
<head>
    <title>Questão 5</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 5</h1>';

$produto1 = 137.57;
$produto2 = 99.2;

$desconto1 = ($produto1 * 8)/100;
$desconto2 = ($produto2 * 11)/100;

$total = ($produto1 - $desconto1) + ($produto2 - $desconto2);
$total = number_format($total, 2, ',', null);

echo 'Valor total a ser pago: ' . $total;