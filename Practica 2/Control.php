<?php
include_once('Fibonacci.php');
$obj = new Fibonacci();
$numero1 = intval($_POST['num1']);
$obj->setLimite($numero1);
$obj->calcularSerie();
echo 'Serie: '.$obj->getSerie();