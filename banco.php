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

if (500 > $contasCorrentes['123.456.789-12']['saldo']) 
{
    echo "Você não pode sacar este valor" . PHP_EOL;
}
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;


foreach($contasCorrentes as $cpf => $conta)
{
    echo $cpf .' '.$conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}