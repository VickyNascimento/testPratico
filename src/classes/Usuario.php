<?php

// buscando o arquivo da classe Linha
require_once "linha.php";

class Usuario{
    private string $nome;
    private string $email;
    private string $endereco;
    private linha $linha; #instanciando a classse linha como um atributo de usuario
 

    // funcao de instanciar usuarios
    public function __construct(string $nome, string $email, string $endereco, Linha $linha,){
        $this->nome=$nome;
        $this->email=$email;
        $this->endereco=$endereco;
        $this->linha=$linha;
    }

    // fumcoes para retornar o nome do usuario
    public function getNome(){
        return $this->nome;
    }

    // fumcoes para retornar o email do usuario
    public function getEmail(){
        return $this->email;
    }


    // fumcoes para retornar o endereco do usuario
    public function getEndereco(){
        return $this->endereco;
    }


    // fumcoes para retornar a linha do usuario
    public function getLinha(){
        return $this->linha;
    }

    //Chamando separadamente o objeto Usuario com sua apresentação
    public function __tostring(){
        return "O cliente, {$this->getNome()}, com email, {$this->getEmail()}, morador do endereco, {$this->getEndereco()}. <br>";
    }
}