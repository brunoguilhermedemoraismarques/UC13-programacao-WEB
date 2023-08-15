<html>
    <head>
        <title>Aula de PHP
    </head>
    </body>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolore, error explicabo minus excepturi fugit veritatis ullam temporibus! Eveniet facere ea voluptatem ab hic reprehenderit nulla ipsa ut eum odio?</p>
    
          <?php


               echo "bruno";
            
          ?>
         
          <br>
          
          <!-- Comentario em PHP -->

          <?php
            
          // Comentario em PHP

          /*
               varias
               linhas
          */

          $nomeCompleto = "Bruno";
          $idade = 17;
          $status = true;
          $salario = 1320.50;
            
          echo $nomeCompleto." ".$idade; 
          echo "<br>";
          echo "$nomeCompleto $idade ano";
          echo "<br>";
          echo '$nomeCompleto $idade anos';

          $logoSenac="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";


          ?>

          <img src="" alt="<?php echo $logoSenac ?>"
           alt="Senac Marilia">

        </body>

</html>