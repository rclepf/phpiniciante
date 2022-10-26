<?php

require 'MeuFiltro.php';

$listaJogos = fopen('jogosps5.txt', 'r');

stream_filter_register('jogos.call', MeuFiltro::class);
stream_filter_append($listaJogos, 'jogos.call');

echo fread($listaJogos, filesize('jogosps5.txt'));
