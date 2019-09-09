<?php
require_once('Calculadora.php');
$calculadora = new Calculadora();
$calculadora->setNumero1(1874);
$calculadora->DecToBin();
echo $calculadora->getResultado();
