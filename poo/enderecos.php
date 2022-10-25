<?php

use Estudos\Bancos\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Arcos', 'Calcita', 'Avenida Principal', '150');
$outroEndereco = new Endereco('BH', 'Funcionários', 'Afonso Pena', '1000');


echo $umEndereco->rua;

exit();

echo $umEndereco . PHP_EOL;

echo $outroEndereco . PHP_EOL;
