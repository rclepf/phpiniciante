<?php

namespace Estudos\Bancos\Modelo\Conta;

use Estudos\Bancos\Modelo\Conta\Titular;

abstract class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }


    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque> $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    public function recuperaNome():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroContas():int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa():float;
}
