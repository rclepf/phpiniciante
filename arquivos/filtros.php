<?php

$listaJogos = fopen('jogosps5.txt','r');

stream_filter_append($listaJogos, 'string.toupper');

echo fread($listaJogos, filesize('jogosps5.txt'));