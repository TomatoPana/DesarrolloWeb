<?php
//TODO ^,%(Porcentaje no Módulo),!,^2,sin,cos,tan,sqrt,DecToBin,BintoDec,DecToOct,OctToDec,DecToHex,HexToDec
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
    public function square(){
      $this->resultado = $this->numero1 * $this->numero1;
    }
    public function porcentaje(){
      $this->resultado = $this->numero1 * ($this->numero2 / 100);
    }
    public function pot(){
      $this->resultado = $this->numero1 ** $this->numero1;
    }
    public function factorial(){
      if($this->numero1 > 0){
        $this->resultado = 1;
        for ($i=1; $i <= $this->numero1; $i++) { 
          $this->resultado = $this->resultado*$i;
        }
      }
    }
    public function sin(){
      $this->resultado = sin($this->numero1);
    }
    public function cos(){
      $this->resultado = cos($this->numero1);
    }
    public function tan(){
      $this->resultado = tan($this->numero1);
    }
    public function getResultado(){
        return $this->resultado;
    }
}