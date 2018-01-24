<?php

/**
 *
 */
 //classe conta com uma função e definindo valor inicial pra um elemento
class conta
{
  public $numero;
  public $saldo=0;
  public $limite=100;
  public $agencia;


function deposita( $valor){
  if($valor>100){
    echo "Não é possivel depositar pois ultrapassa seu limite atual";
  }else {
      $this->saldo+=$valor;
  }
  }

function saca($valor){
  if($valor>100){
    echo "Não é possivel sacar pois ultrapassa seu limite atual deixando sua conta negativa";
  }else {
      $this->saldo-=$valor;
  }
}

function imprime(){

}


}



 ?>
