<?php
//Classe Usuario
class Usuario{
    
    public $nome; 
    public $email;
    public $senha;
}

//Classe Aluno
class Aluno{
    public $nome;
    public $cpf;
    public $email;
    public $dataDeNascimento;
    public $telefone;
    public $celular;


}

//Classe Livro
class Livro{
    public $ISBN;
    public $Titulo;
    public $AnoDePublicacao;
    public $Autor;
    public $Preco;
    public $NumeroDePaginas;
    
    
}

//Classe Emprestimo
class emprestimo{
    public $nomeAluno;
    public $tituloLivro;
    public $dataDevolucao;
    public $dataEmprestimo;
}
//Exemplo de objeto
$Usuario1 = new Usuario;
$Usuario1->nome = 'Abençocado';
$Usuario1->email= '@gmail.com';
$Usuario1->senha = "teste123";



?>
