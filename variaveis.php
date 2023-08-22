<?php

$nomeCompleto = 'bruno guilherme';
$idade = 17;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";
//Converte em maisculo
echo strtoupper($nomeCompleto);

echo "<hr>";
//Converte em minusculo
echo strtoupper($nomeCompleto);

echo "<hr>";

echo ucwords($nomeCompleto);

echo "<hr>";

echo str_replace("bruno", "edson",$nomeCompleto);

echo "<hr>";

echo str_repeat("bruno ",5);

echo empty($nome) ? 'True':'false';



