<?php
//TODO DecToOct,OctToDec,DecToHex,HexToDec

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
  public function sqrt(){
    if($this->numero > 0){
      $numero = $this->numero1;
      for($valorExacto = 0; $valorExacto*$valorExacto < $numero; $valorExacto++);
      $potenciaExacta = --$valorExacto*$valorExacto;
      for($indice = 0; $indice < 10; $indice++){
        $division = $numero / $potenciaExacta;
        $potenciaExacta = ($potenciaExacta + $division)/2;
      }
      $this->resultado = $potenciaExacta;
    }
  }
  public function getResultado(){
      return $this->resultado;
  }
  public function DecToBin(){
    $numero = (int)$this->numero1;
    $resultado = array();
    do{
      array_push($resultado, $numero % 2);
      $numero = intdiv($numero, 2);
    }while($numero != 0);
    $resultado = array_reverse($resultado);
    $this->resultado = implode("", $resultado);
  }
  public function BintoDec(){
    $numero = (string)$this->numero1;
    $limite = strlen($numero);
    $resultado = 0;
    $potencia = $limite-1;
    for($posicion = 0; $posicion < $limite; $posicion++){
      if($numero[$posicion] != '0' && $numero[$posicion] != '1'){
        throw new ErrorException("Syntax Error: Expected binary input", -1, E_ERROR);
      }
      $resultado = $resultado + (intval($numero[$posicion]) * (2**$potencia--));
    }
    $this->resultado = $resultado;
  }
}
