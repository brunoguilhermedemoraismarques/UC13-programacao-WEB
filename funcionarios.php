<?php

$listafuncionarios = [
    [
        "ID" => 1,
        "nome" => "bruno guilherme",
        "email" => "brunogui@teste.com",
        "telefone"=> "(14) 9999-9999" 
    ],
    [
       "id" => "2",
       "nome" => "bruna",
       "email" => "brunasil@teste.com",
       "telefone" => "(14) 9999-9999"

    ],
    [
        "id" => "5",
        "nome" => "gustavo",
        "email" => "gustavome@teste.com",
        "telefone" => "(14) 9999-9999"
 
     ],
     [
        "id" => "4",
        "nome" => "giovana",
        "email" => "giovana@teste.com",
        "telefone" => "(14) 9999-9999"
 
     ],
        

];


//adicionando um item no arry pronto
$qtdefuncionario = count($listafuncionarios);



//adicionando um item no arry pronto
$listafuncionarios[$qtdefuncionario]["id"] = 3;
$listafuncionarios[$qtdefuncionario]["nome"] = "joão";
$listafuncionarios[$qtdefuncionario]["email"] = "joao@teste.com";
$listafuncionarios[$qtdefuncionario]["telefone"] = "(14) 7777-7777";




var_dump($listafuncionarios);