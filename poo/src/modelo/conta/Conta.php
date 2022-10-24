<?php

namespace Estudos\Bancos\Modelo\Conta;

use Estudos\Bancos\Modelo\Conta\Titular;

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    /**
     * @var int $tipo 1 = Conta Corrente; 2 = Poupança
     */
    private $tipo;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }


    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
    public function saca(float $valorASacar): void
    {
        if ($this->tipo === 1) {
            $tarifaSaque = $valorASacar * 0.05;
        } else {
            $tarifaSaque = $valorASacar * 0.03;
        }
        
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

    public function transfere(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Saldo indisponível!';
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
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

    public static function recuperaNumeroContas()
    {
        return self::$numeroDeContas;
    }
}
