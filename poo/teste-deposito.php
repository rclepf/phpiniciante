<?php

use Estudos\Bancos\Modelo\Conta\{ContaCorrente, Titular};
use Estudos\Bancos\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$contaTeste = new ContaCorrente(
    new Titular(
        new CPF('133.222.222-52'),
        'Cliente Fict',
        new Endereco('BH', 'Bairro', 'Rua', '152')
    )
);

try{
$contaTeste->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo!";
}