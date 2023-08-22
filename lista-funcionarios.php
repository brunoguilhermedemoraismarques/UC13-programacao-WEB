<?php

      include "funcionarios.php"; 

?>




<html>
    <head>
        <title>Lista de funcionarios</title>
    </head>
    <body>
        <h1>lista de funcionarios</h1>

        <table border="1">
           <thead>
           <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>e-mail</th>
                <th>telefone</th>
                <th>açao</th>
            </tr>
           </thead>       
        
           <tbody>
                <?php foreach($listafuncionarios as $funcionario): ?>
           
            <tr>
                <td><?=$funcionario["id"] ?></th>
                <td><?=$funcionario["nome"] ?></td>
                <td><?=$funcionario["email"] ?></td>
                <td><?=$funcionario["telefone"] ?></td>
                <td>Editar Visualizar Excluir</td>             
            </tr>
            <?php endforeach; ?>
            </tbody>


            <tfoot>

            <tr>
                <td colspan="5">Foi encontrado 5 funcionarios cadastrados</td>
            </tr>                                                 
                </tfoot>
        </table>
        
        <body>

<m/html>/