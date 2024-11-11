<?php

class Linha{    
    private string $numero; #Criando os atributos da classe Linha
    private string $plano;

    // funcao para instanciar a classe 
    public function __construct(string $numero, string $plano){
        $this->numero=$numero;
        $this->plano=$plano;
    }
 
    // fumcoes para retornar o numero da linha
    public function getNumero(){
        return $this->numero;
    }

    // fumcoes para retornar o numero da linha
    public function getPlano(){
        return $this->plano;
    }

    public function __tostring(){
        return "dono da linha {$this->getNumero()}, com o plano contratado de {$this->getPlano()}. <br>";
    }
}