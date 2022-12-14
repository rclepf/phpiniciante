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
    } catch (Throwable $problema) /* (Exception | Error $problema) */ /* (Exception $problema)  */
    /* catch (RuntimeException | DivisionByZeroError $problema) */ {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getFile() . PHP_EOL;
       /*  echo $problema->getTrace() . PHP_EOL; */
        echo $problema->getTraceAsString() . PHP_EOL;
        /* throw new RuntimeException('Problema foi tratado', 1, $problema); */
    } /* catch (Error $erro){
        echo $erro->getMessage() . PHP_EOL;
    } */

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    /* $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor'; */

/*     $divisao = intdiv(5, 0);

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
 */
    /* $exception = new RuntimeException();
    throw $exception; */
    intdiv(1, 0);
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
