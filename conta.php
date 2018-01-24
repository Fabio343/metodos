<?php

/**
 *
 */
 //classe conta com uma função e definindo valor inicial pra um elemento
class conta
{
  public $numero= 1256455;
  public $saldo=0;
  public $limite=100;
  public $agencia= 2222;


function deposita( $valor){
  if($valor>100){
    echo "Não é possivel depositar pois ultrapassa seu limite atual" . PHP_EOL;
  }else {
      $this->saldo+=$valor;
  }
  }

function saca($valor){
  if($valor>100){
    echo "Não é possivel sacar pois ultrapassa seu limite atual deixando sua conta negativa" . PHP_EOL;
  }else {
      $this->saldo-=$valor;
  }
}

function imprime_extrato(){
  echo "saldo disponivel:$this->saldo" . PHP_EOL;

}

function extrato($valor){
  echo "Valor sacado $this->$saldo-$valor" . PHP_EOL;
  echo "Conta $this->$numeto" . PHP_EOL;
  echo "Agencia $this->$agencia" . PHP_EOL;

}

}



 ?>
