<?php

$jogos = fopen('zip://arquivos.zip#jogosps5.txt', 'r');
stream_copy_to_stream($jogos, STDOUT);
