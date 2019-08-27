<?php
/**
 * Clase para realizar calculos de la serie de Fibonacci
 */
class Fibonacci {
  /**
   * Inicializa la instancia con un límite previo (Opcional)
   * @param int $limite El limite de la serie para calcular
   * @return void
   */
  function __construct(int $limite = 0) {
    $this->limite = $limite;
  }

  /**
   * @var array $resultado El resultado impreso de la serie de Fibonacci
   */
  protected $resultado;

  /**
   * @var int $limite Limite de la serie a calcular
   */
  protected $limite;

  /**
   * Configura el límite para calcular la serie de Fibonacci
   * @param int $limite El limite de la serie para calcular
   * @return void
   */
  public function setLimite(int $limite = 0) {
    $this->limite = $limite;
  }

  /**
   * Efectua el cálculo de la serie de Fibonacci
   * @return void
   */
  public function calcularSerie() {
    $this->resultado = array();
    for($item = 0; $item <= $this->limite; $item++) {
      if($item == 0 || $item == 1){
        array_push($this->resultado, 1);
      } else {
        array_push($this->resultado, $this->resultado[$item - 1] + $this->resultado[$item - 2]);
      }
    }
  }

  /**
   * Obtiene el resultado de la serie después de ser calculada
   * @return string La cadena con el resultado
   * @throws RuntimeException Si se obtiene el resultado sin hacer 
   * el cálculo previo resultará en un RuntimeException
   */
  public function getSerie() : string {
    if(!isset($this->resultado)){
      throw new RuntimeException("Error, Calculo no efectuado");
    } else {
      return implode(",", $this->resultado);
    }
  }
}