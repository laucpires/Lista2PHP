<!-- 9 – (DESAFIO) Escreva um algoritmo em PHP que imprima na tela os números de 0 a 10, com exceção do 7. -->

<!DOCTYPE html>

<head>
    <title>Questão 9</title>
</head>

</html>

<?php

echo '<h1 style="margin-top: -5px;margin-bottom: 5px;">Questão 9</h1>';

for ($i = 0; $i <= 10; $i++) {
    if ($i == 7) continue;
    echo $i . '<br>';
}