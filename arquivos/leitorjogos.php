<?php

$arquivo = fopen('jogosps5.txt', 'r');

while (!feof($arquivo)) {
    $jogos = fgets($arquivo);

    echo $jogos;
}

fclose($arquivo);
