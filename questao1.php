<!-- 1 – Escreva um algoritmo em PHP que receba duas notas, 
calcule a média e exiba para o usuário a média se ela for maior que 7; 
caso contrário, exiba “Aluno reprovado”. -->

<!DOCTYPE html>
<head>
    <title>Questão 1</title>
</head>
</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 1</h1>';

$nota1 = 7;
$nota2 = 10;
$media = ($nota1 + $nota2)/2;

if ($media > 7)
    echo 'Média: ' . $media;
else 
    echo 'Aluno reprovado.';