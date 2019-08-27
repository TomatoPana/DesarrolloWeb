<?php
class Calculadora {
    protected $numero1;
    protected $numero2;
    protected $resultado;
    protected $operador;
    public function setNumero1($numero1){
        $this->numero1 = $numero1;
    }
    public function setNumero2($numero2){
        $this->numero2 = $numero2;
    }
    public function setOperador($operador){
        switch($operador){
            case '+':
                $this->resultado = $this->numero1 + $this->numero2;
            break;
            case '-':
                $this->resultado = $this->numero1 - $this->numero2;
            break;
            case '*':
                $this->resultado = $this->numero1 * $this->numero2;
            break;
            case '/':
                $this->resultado = $this->numero1 / $this->numero2;
            break;
        }
    }
    public function getResultado(){
        return $this->resultado;
    }
}