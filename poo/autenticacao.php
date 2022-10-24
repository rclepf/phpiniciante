<?php

use Estudos\Bancos\Modelo\Conta\Titular;
use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Modelo\Endereco;
use Estudos\Bancos\Modelo\Funcionario\Diretor;
use Estudos\Bancos\Modelo\Funcionario\Gerente;
use Estudos\Bancos\Servico\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Joao Batista', new CPF('123.123.123-55'), 10000);
$umGerente = new Gerente('Joao Batista', new CPF('123.123.123-55'), 10000);
$umTitular = new Titular(new CPF('123.123.123-55'), 'José Batista', new Endereco('Belo Horizonte',' ', 'Rua JJJ', '1234'));

$autenticador->tentaLogin($umTitular, 'abcd');
