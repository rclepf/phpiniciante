<?php

require_once 'autoload.php';

use Estudos\Bancos\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Estudos\Bancos\Modelo\{CPF, Endereco};
    
$endereco = new Endereco(cidade: 'BH', bairro: 'Centro', rua:'Rua da Bahia', numero:'1010');
$endereco1 = new Endereco(cidade: 'BH', bairro: 'Centro', rua:'Rua São Paulo', numero:'1105');
$primeiraConta = new ContaCorrente(new Titular(new CPF('089.155.136-55'), 'Rodolfo Clepf', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new ContaCorrente(new Titular(new CPF('089.154.136-51'), 'Fabi Furtado', $endereco));

$terceiraConta = new ContaPoupanca(new Titular(new CPF('089.154.126-51'), 'Bob the Cat', $endereco));

$quartaConta = new ContaPoupanca(new Titular(new CPF('089.154.126-52'), 'Pessoa Aleatoria', $endereco1));

echo $primeiraConta->recuperaNome() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroContas() . PHP_EOL;
var_dump($quartaConta);
var_dump($terceiraConta);
