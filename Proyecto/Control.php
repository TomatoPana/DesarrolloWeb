<?php
require_once('Calculadora.php');
$calculadora = new Calculadora();
$calculadora->setNumero1(1110111010101);
$calculadora->DecToHex();
echo $calculadora->getResultado();
