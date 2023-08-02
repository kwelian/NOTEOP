<?php

class Raiz{
    public $valor;
    public $resltado;

    public function __construct($valor){
        $this->$valor = $valor;
    }
    public function getRaiz(){
        $resltado = sqrt($this->$valor);
        return $resltado;
    }
}