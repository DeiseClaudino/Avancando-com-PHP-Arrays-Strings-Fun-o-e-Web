<?php

$contasCorrentes = [
    '123.456.789-10' => [
    'titular'   =>  'Vinicius',
    'saldo'     =>  1000
    ],

    '123.456.789-11' => [
        'titular'   =>  'Maria',
        'saldo'     =>  10000
    ],

    '123.456.789-12' => [
        'titular'   =>  'Alberto',
        'saldo'     =>  300
    ]
];

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);


foreach($contasCorrentes as $cpf => $conta)
{
    exibeMensagem($cpf .' '.$conta['titular'] . ' ' . $conta['saldo']);
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
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