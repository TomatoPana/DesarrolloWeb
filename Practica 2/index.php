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
   * @var string $resultado El resultado impreso de la serie de Fibonacci
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
    $resultadoHandler = "";
    for($item = 1; $item <= $this->limite; $item++) {
      if($item = 1 || $item = 2){
        $resultadoHandler .= "1, ";
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
    if(!isset($resultado)){
      throw new RuntimeException("Error, Calculo no efectuado");
    } else {
      return $this->resultado;
    }
  }
}

try {
  $serie = new Fibonacci();
  $serie->setLimite(10);
  $serie->calcularSerie();
  echo $serie->getSerie();
} catch (Exception $e) {
  echo $e->getMessage();
}