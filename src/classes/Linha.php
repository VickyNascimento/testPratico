<?php

class Linha{    
    private string $numero;
    private string $plano;

    public function __construct(string $numero, string $plano){
        $this->numero=$numero;
        $this->plano=$plano;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getPlano(){
        return $this->plano;
    }
}