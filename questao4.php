<!-- 4 – Escreva um algoritmo em PHP que calcule a área de uma 
circunferência a partir do valor do raio fornecido pelo usuário -->

<!DOCTYPE html>
<head>
    <title>Questão 4</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 4</h1>';

$raio = 9.4;

$circunferencia = ($raio * $raio)/pi();
echo 'Circunferência: ' . $circunferencia;