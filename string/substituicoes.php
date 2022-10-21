<?php

$texto = 'Texto com qualquer coisa, poxa e caramba';

echo str_replace(
    ['poxa', 'caramba'],
    ['***', '//'], 
    $texto
    ) . PHP_EOL;

echo strtr($texto,'pox', '*$@') . PHP_EOL;

echo strtr($texto,['poxa' => '**', 'caramba' => '@@']) . PHP_EOL;

$trans = ["h" => "-", "hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;


echo str_replace(['hello', 'hi'], ['hi', 'hello'],"hi all, I said hello"). PHP_EOL;