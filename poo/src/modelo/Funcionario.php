<?php

namespace Estudos\Bancos\Modelo;

use Estudos\Bancos\Modelo\{Pessoa, CPF};

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo():string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
    $this->validaNome($nome);
    $this->nome = $nome;
    }
}