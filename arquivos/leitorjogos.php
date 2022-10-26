<?php

$jogos = file_get_contents('jogosps5.txt');

echo $jogos . PHP_EOL;

$jogos = file('jogosps5.txt');

var_dump($jogos);