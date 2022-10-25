<?php

namespace Estudos\Bancos\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = "recupera" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}