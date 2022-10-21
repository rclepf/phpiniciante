<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
    
$primeiraConta = new Conta(new Titular(new CPF('089.154.136-52'), 'Rodolfo Clepf'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new Conta(new Titular(new CPF('089.154.136-51'), 'Aber Clepf'));

$terceiraConta = new Conta(new Titular(new CPF('089.154.126-51'), 'Jurl Clepf'));

$quartaConta = new Conta(new Titular(new CPF('089.154.126-52'), 'Jurly Clepf'));

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroContas() . PHP_EOL;
var_dump($quartaConta);
