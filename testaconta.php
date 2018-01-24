<?php
//
declare(strict_types=1);// usado apenas apos php 7  e antes da chamada da classe para saber se o valor corresponde ao tipo que foi definido antes
// demais php
// if(is_float($valor)){
//função
//} isso deve ser na função da classe
require 'conta.php';
$conta=new conta();
$conta->deposita(15) . PHP_EOL;
$conta->imprime_extrato() . PHP_EOL;
$conta->saca(10) . PHP_EOL;
$conta->imprime_extrato() . PHP_EOL;
$conta->extrato() . PHP_EOL;

 ?>
