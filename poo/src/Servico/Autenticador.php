<?php

namespace Estudos\Bancos\Servico;

use Estudos\Bancos\Modelo\Autenticavel;

class Autenticador
{
     public function tentaLogin(Autenticavel $autenticavel, string $senha)
     {
          if ($autenticavel->podeAutenticar($senha)) {
               echo "Ok. Usuário logado no sistema.";
          } else {
               echo "Ops, senha incorreta!";
          }
     }
}
