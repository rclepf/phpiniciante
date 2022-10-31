<?php

try { 
    echo "Executando" . PHP_EOL;
  /*   throw new Exception('Erro') */;
} catch (Throwable $e) {
    echo "Pego pelo catch" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}
