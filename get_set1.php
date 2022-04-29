<?php
require_once 'classes/classe.php';

$valor1 = new valor();
$valor2 = new valor();
$valor3 = new valor();

$valor1->setvalor1(10);
$valor2->setvalor2(10);
$valor3->setvalor3(10);


echo '$valor1 * $valor2 * $valor3';
