<?php

namespace Estudos\Bancos\Servico;

use Estudos\Bancos\Modelo\Funcionario;

class ControladorBonificacao
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
