<?php
//classe usuario

use Livro as GlobalLivro;
use Usuario as GlobalUsuario;

class Usuario{

    private $nome;
    private $email;
    private  $senha;

    public function NovoUsuario(){
       $novoUsuario = new Usuario();
       $novoUsuario->nome="Agua";
       $novoUsuario->email="agua@gmail.com";
       $novoUsuario->senha="65326";
    }


}

class biblioteca{

    public $nome;
    public $email;
    public $senha;
    public $numero_pagina;
    public $autor;
    public $titulo_livro;
    public $emprestimo;

}

class Livro{

    public $ISBN;
    public $ano_publicacao;
    public $numero_pagina;
    public $autor;
    public $titulo;

    public function NovoLivro(){
        $NovoLivro = new Livro();
        $NovoLivro->ISBN="5420345";
        $NovoLivro->ano_publicacao="2005";
        $NovoLivro->numero_pagina="1200";
        $NovoLivro->autor="jose";
        $NovoLivro->titulo="game_over";
       
    }

}

class emprestimo{

   public $nome; 
   public $data_retirada;
   public $data_devolucao;
   public $emprestimo;
   
  public function novoEmprestimo(){
        $novoemprestimo = new livro();
        

  }

}

