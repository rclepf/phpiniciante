<?php

$arquivoJogos = new SplFileObject('jogos.csv');

while (!$arquivoJogos->eof()){
    $linha = $arquivoJogos->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoJogos->getCTime());

echo $date->format('d/m/Y');