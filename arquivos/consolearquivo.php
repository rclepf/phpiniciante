<?php

$novoJogo = trim(fgets(STDIN));

file_put_contents('novosjogos.txt', "\n$novoJogo", FILE_APPEND);