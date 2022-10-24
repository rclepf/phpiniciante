<?php

namespace Estudos\Bancos\Servico;

use Estudos\Bancos\Modelo\Funcionario\Diretor;

class Autenticador
{
     public function tentaLogin(Diretor $diretor, string $senha)
     {
          if ($diretor->podeAutenticar($senha)) {
               echo "Ok. Usuário logado no sistema.";
          } else {
               echo "Ops, senha incorreta!";
          }
     }
}
