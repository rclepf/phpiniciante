<?php

$teclado = fopen('php://stdin', 'r');

$novoJogo = trim(fgets($teclado));

file_put_contents('novosjogos.txt', "\n$novoJogo", FILE_APPEND);