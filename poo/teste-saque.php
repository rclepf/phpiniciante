<?php

use Estudos\Bancos\Modelo\Conta\Conta;
use Estudos\Bancos\Modelo\Conta\Titular;
use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias', 
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    ),
    2
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();