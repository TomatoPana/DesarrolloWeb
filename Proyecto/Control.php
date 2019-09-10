<?php
header('Content-Type: application/json');
$json = json_decode(file_get_contents('php://input'), true);

echo json_encode($json);
/* require_once('Calculadora.php');
$calculadora = new Calculadora();
$calculadora->setNumero1(1110111010101);
$calculadora->HexToDec();
echo $calculadora->getResultado();
*/