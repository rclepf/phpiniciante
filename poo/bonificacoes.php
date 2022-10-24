<?php

require_once 'autoload.php';

use Estudos\Bancos\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};
use Estudos\Bancos\Modelo\CPF;
use Estudos\Bancos\Servico\ControladorBonificacao;

$umFuncionario = new Desenvolvedor('Rodolfo', new CPF('125.111.458-58'), 'Dev', 1500);

$umaFuncionario = new Gerente('Fabiola', new CPF('122.111.458-58'), 'Gerente', 1800);

$outroFuncionario = new Diretor('Alguem', new CPF('127.111.458-58'), 'Diretor', 2500);

$umFuncionario->sobeNivel();

$controlador = new ControladorBonificacao;
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionario);
$controlador->adicionaBonificacao($outroFuncionario);

echo $controlador->recuperaTotal();