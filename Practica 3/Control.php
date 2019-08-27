<?php
include_once('Primos.php');
$obj = new Primos();
$numero1 = intval($_POST['num1']);
$obj->setLimite($numero1);
$obj->calcularSerie();
echo 'Serie: '.$obj->getSerie();