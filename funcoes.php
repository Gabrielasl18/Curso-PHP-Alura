<?php 


function exibeMensagem($mensagem) {
  echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array 
{
    if($valorADepositar > 0) {
      $conta['saldo'] += $valorADepositar;
    }
    else {
      exibeMensagem("Depositos precisam ser positivos.");
    }
    return $conta;
}