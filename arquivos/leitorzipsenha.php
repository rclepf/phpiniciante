<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '12345'
    ]
]);

echo file_get_contents('zip://arquivo.zip#jogosps5.txt', false, $contexto);


/* fopen('zip://arquivo.zip#jogosps5.txt', 'r', false, $contexto); */