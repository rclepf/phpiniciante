<?php

use Estudos\Bancos\Modelo\Conta\Conta;
use Estudos\Bancos\Modelo\Conta\ContaCorrente;
use Estudos\Bancos\Modelo\Conta\ContaPoupanca;
use Estudos\Bancos\Modelo\Conta\Titular;
use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias', 
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    ),
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();