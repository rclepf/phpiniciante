<?php

$arquivo = fopen('novosjogos.txt', 'a');

$jogo ="\n" . 'Marvel Spider-Man Miles Morales';

fwrite($arquivo, $jogo);

fclose($arquivo);   