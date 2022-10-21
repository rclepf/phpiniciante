<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
require_once 'src/endereco.php';
    
$endereco = new Endereco(cidade: 'BH', bairro: 'Centro', rua:'Rua da Bahia', numero:'1010');
$endereco1 = new Endereco(cidade: 'BH', bairro: 'Centro', rua:'Rua São Paulo', numero:'1105');
$primeiraConta = new Conta(new Titular(new CPF('089.155.136-55'), 'Rodolfo Clepf', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new Conta(new Titular(new CPF('089.154.136-51'), 'Fabi Furtado', $endereco));

$terceiraConta = new Conta(new Titular(new CPF('089.154.126-51'), 'Bob the Cat', $endereco));

$quartaConta = new Conta(new Titular(new CPF('089.154.126-52'), 'Pessoa Aleatória', $endereco1));

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroContas() . PHP_EOL;
var_dump($quartaConta);
var_dump($terceiraConta);
