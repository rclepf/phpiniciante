<?php

$anoNascimento = '1989';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 1989) {
    echo "Sim" . PHP_EOL;
} else {
    echo "Não" . PHP_EOL;
}