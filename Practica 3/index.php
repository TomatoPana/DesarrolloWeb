<?php
class Primos {
  protected $limite;
  protected $resultado;
  public function setLimite(int $limite = 0) {
    $this->limite = $limite;
  }
  public function calcularSerie() {
    $this->resultado = array();
    for($numero = 1, $item = 1; $item <= $this->limite; $numero++){
      $noPrimo = false;
      if($numero == 1){
        array_push($this->resultado, $numero);
        $item++;
      } else if($numero == 2){
        array_push($this->resultado, $numero);
        $item++;
      } else {
        for($count = 2; $count < $numero; $count++){
          if($numero % $count == 0) {
            $noPrimo = true;
            break;
          }
        }
        if(!$noPrimo){
          array_push($this->resultado, $numero);
          $item++;
        }
      }
    }
  }
  public function getSerie() : string {
    if(!isset($this->resultado)){
      throw new RuntimeException("Error, Calculo no efectuado");
    } else {
      return implode(",",$this->resultado);
    }
  }
}
