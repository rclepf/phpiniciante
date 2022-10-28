<?php

use Estudos\Bancos\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use Estudos\Bancos\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    ),
);

$conta2 = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-15'),
        'José Dias',
        new Endereco('BH', 'Centro', 'Rua 5', '37')
    ),
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo() . PHP_EOL;

$conta2->deposita(500);
try{
$conta2->saca(550);
} catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo suficiente para realizar esse saque." . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;  
}
echo $conta2->recuperaSaldo() . PHP_EOL;
