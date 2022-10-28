<?php

namespace Estudos\Bancos\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, porém possui apenas $saldoAtual em conta.";
        parent::__construct($mensagem);
    }
}