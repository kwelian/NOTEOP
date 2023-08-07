<?php

class Suma {
    public $valor1;
    public $valor2;
    public $result;
   
    public function __construct($valor1, $valor2)
    {
      $this->valor1 = $valor1;
      $this->valor2 = $valor2;
    }
  
  
    public function getSumaFrist(){
        echo "Suma: ";
      $result = $this->valor1 + $this->valor2;
      return $result;
    }
    public function getRestaFrist(){
        echo " Resta: ";
        $result = $this->valor1 - $this->valor2;
        return $result;
      }
      public function getMultiFrist(){
        echo " Multiplicacion: ";
        $result = $this->valor1 * $this->valor2;
        return $result;
      }
      public function getDivFrist(){
        echo " Division: ";
        $result = $this->valor1 / $this->valor2;
        return $result;
      }
}


