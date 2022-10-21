<?php

use Decimal\Decimal;

$debitos = array();
$creditos = array();

array_push($debitos, new Decimal("0.1"));
array_push($debitos, new Decimal("0.2"));

array_push($creditos, new Decimal("0.3"));

function saldo(array $creditos, array $debitos) {
    return array_sum($creditos) - array_sum($debitos);
}

echo saldo($creditos, $debitos);

?>