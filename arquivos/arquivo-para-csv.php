<?php

$meusJogos =  file('jogosps5.txt');
$outrosJogos = file('novosjogos.txt');

$arquivoCsv = fopen('jogos.csv', 'w');

foreach ($meusJogos as $jogos) {
    $linha = [trim($jogos), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');

  /*   fwrite($arquivoCsv, implode(',', $linha)); */
}

foreach ($outrosJogos as $jogos) {
    $linha = [trim($jogos), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
    
  /*   fwrite($arquivoCsv, implode(',', $linha)); */
}

fclose($arquivoCsv);