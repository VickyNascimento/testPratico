<?php

require_once "linha.php";

class Usuario{
    private string $nome;
    private string $email;
    private string $endereco;
    private linha $linha;
 
    public function __construct(string $nome, string $email, string $endereco, Linha $linha,){
        $this->nome=$nome;
        $this->email=$email;
        $this->endereco=$endereco;
        $this->linha=$linha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getLinha(){
        return $this->linha;
    }

}