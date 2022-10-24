<?php

namespace Estudos\Bancos\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
