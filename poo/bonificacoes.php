<?php

require_once 'autoload.php';

use Estudos\Bancos\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Servico\ControladorBonificacao;

$umFuncionario = new Desenvolvedor('Rodolfo', new CPF('125.111.458-58'), 1500);

$umaFuncionario = new Gerente('Fabiola', new CPF('122.111.458-58'), 1800);

$outroFuncionario = new Diretor('Alguem', new CPF('127.111.458-58'), 2500);

$umEditor = new EditorVideo('Mirele', new CPF('195.444.455-52'), 2000);

$umFuncionario->sobeNivel();

$controlador = new ControladorBonificacao;

$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionario);
$controlador->adicionaBonificacao($outroFuncionario);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();
