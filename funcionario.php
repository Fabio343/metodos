<?php

/**
 *
 */
class funcionario
{
  public $nome;
  public $salario=0;

  function aumenta_salario($valor)
  {
    $this->salario+=$valor;
  }

  function consulta_dados(){
    echo "Funcionario: $this->nome" . PHP_EOL;
    echo "Salario atual: $this->salario" . PHP_EOL;

  }
}

$funcio=new funcionario();

$funcio->nome="Rafael Cosentino";
$funcio->salario=1000;

$funcio->aumenta_salario(100);
$funcio->consulta_dados();


 ?>
