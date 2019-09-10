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
  public function square(){
    $this->resultado = $this->numero1 * $this->numero1;
  }
  public function porcentaje(){
    $this->resultado = $this->numero1 * ($this->numero2 / 100);
  }
  public function pot(){
    $this->resultado = $this->numero1 ** $this->numero2;
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
  public function DecToOct(){
    $decimalNum = $this->numero1;
    $octalNum = 0;
    $placeValue = 1;

    while ($decimalNum != 0) {
      $octalNum += ($decimalNum % 8) * $placeValue;
      $decimalNum = intval($decimalNum / 8);
      $placeValue *= 10;
    }
    $this->resultado = $octalNum;
  }
  public function OctToDec(){
    $numeroOctal = $this->numero1;
    $resultado = 0;
    $residuo = 0;
    for($indice = 0; $numeroOctal != 0; $indice++){
      $residuo = $numeroOctal % 10;
      $numeroOctal = intval($numeroOctal / 10);
      $resultado += $residuo * pow(8, $indice);
    }
    $this->resultado = $resultado;
  }
  public function DecToHex(){
    $decimalNum = 4855;
    $hexadecimalNum = "";

    while ($decimalNum != 0) {
      $valorParcial = ($decimalNum % 16);
      switch($valorParcial){
        case 10:
          $hexadecimalNum .= 'A';
        break;
        case 11:
          $hexadecimalNum .= 'B';
        break;
        case 12:
          $hexadecimalNum .= 'C';
        break;
        case 13:
          $hexadecimalNum .= 'D';
        break;
        case 14:
          $hexadecimalNum .= 'E';
        break;
        case 15:
          $hexadecimalNum .= 'F';
        break;
        default:
          $hexadecimalNum .= strval($valorParcial);
      }
      $decimalNum = intval($decimalNum / 16);
    }
    $hexadecimalNum = strrev($hexadecimalNum);
    echo $hexadecimalNum;
  }
  public function HexToDec(){
    $hexadecimalNum = "12F7";
    $resultado = 0;
    $valorIndividual = 0;
    $limite = strlen($hexadecimalNum);
    for($indice = 0; $indice < $limite; $indice++){
      switch($hexadecimalNum[$indice]){
        case 'A':case 'a':
          $valorIndividual = 10;
        break;
        case 'B':case 'b':
          $valorIndividual = 11;
        break;
        case 'C':case 'c':
          $valorIndividual = 12;
        break;
        case 'D':case 'd':
          $valorIndividual = 13;
        break;
        case 'E':case 'e':
          $valorIndividual = 14;
        break;
        case 'F':case 'f':
          $valorIndividual = 15;
        break;
        default:
          $valorIndividual = intval($hexadecimalNum[$indice]);
        break;
      }
      $resultado += $valorIndividual*pow(16, $limite-$indice-1);
    }
    echo $resultado;
  }
}
