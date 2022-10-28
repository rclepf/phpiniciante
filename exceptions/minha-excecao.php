<?php

class MinhaExcecao extends Exception
{
    public function exibeNome()
    {
        echo 'Nome de alguém!';
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeNome();
}
