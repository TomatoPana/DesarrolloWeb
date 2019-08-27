<?php
include_once('Calculadora.php');
$obj = new Calculadora();
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operador = $_POST['op'];
$obj->setNumero1($numero1);
$obj->setNumero2($numero2);
$obj->setOperador($operador);
echo 'La Operación es: '.$obj->getResultado();