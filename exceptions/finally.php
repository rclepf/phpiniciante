<?php

function a(): int
{
    try {
        echo "Código" . PHP_EOL;
       /*  throw new Exception(); */
        return 0;
    } catch (Throwable $e) {
        echo "Problema" . PHP_EOL;
        return 1;
    } finally {
        echo "Sempre acontece" . PHP_EOL;
    }
}

echo a();