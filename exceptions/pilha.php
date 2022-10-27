<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    /* try{
       
    } catch (RuntimeException $problema) {
        echo "Aconteceu um erro na função 1" . PHP_EOL;
    } */
    try {
        funcao2();
    } catch (RuntimeException $problema) {
        echo "A solução do problema esta na função 1" . PHP_EOL;
    } catch (DivisionByZeroError $erro) {
        echo "Erro ao dividir um número por 0" . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5, 0);

    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
