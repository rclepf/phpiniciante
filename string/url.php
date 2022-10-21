<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, needle:'https')){
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, needle:'.br')){
    echo 'É um domínio brasileiro';
} else {
    echo 'Não é um domínio brasileiro';
}

echo PHP_EOL;

if (str_contains($url, needle:'alura')){
    echo 'É site da Alura';
} else {
    echo 'Não é site da Alura';
}

echo PHP_EOL;