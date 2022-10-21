<?php

$nome = 'Rodolfo Carvalho';

$ehDaMinhaFamilia = (str_contains($nome, 'Clepf'));

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família." . PHP_EOL;
} else {
    echo "$nome não é da minha família." . PHP_EOL; 
}