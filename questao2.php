<!-- 2 – Escreva um algoritmo em PHP que receba um número, acrescente 8%, divida o total por 10 e 
utilizando um laço de repetição imprima na tela da seguinte maneira: 
1ª parcela =  R$ 100 / 2ª parcela = R$ 100 -->

<!DOCTYPE html>
<head>
    <title>Questão 2</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 2</h1>';

$valor = 235;
$acrescimo = ($valor * 8)/100;
$total = ($valor + $acrescimo)/10;

$p = 1;
for ($i = 1; $i <= 10; $i++) {
    echo 'Parcela ' . $p . ' = ' . $total . '<br>';
    $p++;
}

echo '<strong>Total com acréscimo: ' . ($valor + $acrescimo) . '</strong>';