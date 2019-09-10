<?php
require_once('Calculadora.php');
header('Content-Type: application/json');
$json = json_decode(file_get_contents('php://input'), true);
$calculadora = new Calculadora();
$resultado = 0;
switch($json['tipoOperacion']){
  case 1:
    $calculadora->setNumero1($json['numero1']);
    $calculadora->setNumero2($json['numero2']);
    $calculadora->setOperador($json['operador']);
    $resultado = $calculadora->getResultado();
  break;
  case 2:
    $calculadora->setNumero1($json['numero1']);
    $calculadora->setOneNumberOperador($json['operador']);
    $resultado = $calculadora->getResultado();
  break;
  case 3:
    $calculadora->setNumero1($json['numero1']);
    $calculadora->setConversor($json['operador']);
    $resultado = $calculadora->getResultado();
  break;
}
echo json_encode(array("resultado"=>$resultado));
/* require_once('Calculadora.php');
$calculadora = new Calculadora();
$calculadora->setNumero1(1110111010101);
$calculadora->HexToDec();
echo $calculadora->getResultado();
*/