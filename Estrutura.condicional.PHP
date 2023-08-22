<?php

$nome = "bruno guilherme";
$email = "brunomorais0507@gmail.com";
$senha = "12345678";
$idade = 17;

echo "<h5>Estrutura Condicional</h5>";

echo "<hr>";
echo "<h5> Exemplo de if() </h5>";


if($idade >= 18){
    echo "O usuario $nome é maior de idade";
}

////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e Else </h5>";

if($senha == "12345678"){
     echo "A senha é valida!";
}else{
    echo "Senha invalida!";
}

////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e elseIf else </h5>";

if($idade <= 17){
    echo "Jovem";
}else if($idade <= 21){
    echo "Adulto";
}else{
    echo "Velho";
}

////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e elseIf else </h5>";

echo ($idade >= 17) ? "Maior de idade" : "Menor de idade";

////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e elseIf else </h5>";
if($email == "brunomorais@gmail.com" && $senha == "12345678"){
    echo "Usuario autenticado";
}else{
    echo "Usuario ou senha invalido";
}

////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e elseIf else </h5>";

$numero = 10; 


if($numero % 2 == 0){
    echo "numero par";

}else{
    echo "numero impar";
}

$diaSemana = date('w');

if ($diaSemana == 0){
    echo "hoje e domingo";
}else if($diaSemana == 0){
    echo "hoje e segunda";
}else if($diaSemana == 0){
    echo "hoje e terça";
}else if($diaSemana == 0){
    echo "hoje e quarta";
}else if($diaSemana == 0){
    echo "hoje e quinta "
}else if($diaSemana == 0){
    echo "hoje e sexta"
}else;
    











