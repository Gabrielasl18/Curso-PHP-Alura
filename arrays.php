<?php
//include 'funcoes.php'; // se ele não encontrar o arquivo, ele continua o programa

require 'funcoes.php'; // ele vai parar se não achar o arquivo ou se tiver erro.

require_once  'funcoes.php'; // antes de incluir o arquivo, ele verifica se ele já está lá 

function exibeOlaMundo() {
  echo "Olá mundo!";
}

function exibeMensagem($mensagem) {
  echo $mensagem . '<br>';
}

$contasCorrentes = [
  '123.456.189-19' => $conta1 = [
  'titular' => 'Gabriela',
  'saldo' => 1000
],
  '123.456.389-13' => $conta2 = [
  'titular' => 'Maria',
  'saldo' => 10000
],
  '123.456.089-12' => $conta3 = [
  'titular' => 'Alberto',
  'saldo' => 300
]
];
$contasCorrentes['123.456.790-10'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes['123.456.189-19']['saldo'] -= 500;
if(500 > $contasCorrentes['123.456.189-19']['saldo']) {
  exibeMensagem("Você não pode sacar este valor");
} else {
  $contasCorrentes['123.456.189-19']['saldo'] -= 500;
} /*Não está bom, vai ficar repetitivo e não está seguro.*/

//$contasCorrentes['123.456.189-19'] = depositar();
  
foreach($contasCorrentes as $cpf => $conta) {
  exibeMensagem ("$cpf {$conta['titular']} {$conta['saldo']}");
}

exibeOlaMundo();
