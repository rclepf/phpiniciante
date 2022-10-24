<?php

use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Modelo\Funcionario\Diretor;
use Estudos\Bancos\Servico\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Joao Batista', new CPF('123.123.123-55'), 10000);

$autenticador->tentaLogin($umDiretor, '12345');
