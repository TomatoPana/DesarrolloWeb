<?php
require_once('Calculadora.php');
header('Content-Type: application/json');
$json = json_decode(file_get_contents('php://input'), true);
$calculadora = new Calculadora();
$resultado = 0;
switch($json['tipoOperacion']){
  case 1:
    $this->setNumero1($json['numero1']);
    $this->setNumero2($json['numero2']);
    $this->setOperador($json['operador']);
    $resultado = $this->getResultado();
  break;
  case 2:
    $this->setNumero1($json['numero1']);
    $this->setOneNumberOperador($json['operador']);
    $resultado = $this->getResultado();
  break;
  case 3:
    $this->setNumero1($json['numero1']);
    $this->setConversor($json['operador']);
    $resultado = $this->getResultado();
  break;
}
echo json_encode(array("resultado"=>$resultado));
/* require_once('Calculadora.php');
$calculadora = new Calculadora();
$calculadora->setNumero1(1110111010101);
$calculadora->HexToDec();
echo $calculadora->getResultado();
*/