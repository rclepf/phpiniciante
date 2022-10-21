<?php

$nome = 'Rodolfo Clepf';
$email = ' rclepf@gmail.com ';
$senha = '123ússsa';

echo strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Rodolfo Clepf, 33, rclepf@gmail.com';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;