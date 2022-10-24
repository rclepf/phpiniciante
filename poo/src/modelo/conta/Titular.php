<?php

namespace Estudos\Bancos\Modelo\Conta;

use Estudos\Bancos\Modelo\{Pessoa, CPF, Endereco};

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    
    public function recuperaEndereco():Endereco
    {
        return $this->endereco;
    }
}
