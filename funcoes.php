<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . "<br>";
}

function exibeConta($conta)
{
   echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) 
    {
        exibeMensagem("Você não pode sacar este valor");
    }
    else {
        
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// Ao passar o tipo que a função precisa receber na variável bloqueamos a entrada de tipos diferentes e retornamos ao usuário o erro de tipos
function depositar(array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0 )
    {
        $conta['saldo'] += $valorADepositar;
    }
    else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular']   = mb_strtoupper($conta['titular']);
}