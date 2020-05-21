<?php

$contasCorrentes = [
    '123.456.789-10' => [
    'titular'   =>  'Vinicius',
    'saldo'     =>  1000
    ],

    '123.456.789-11' => [
        'titular'   =>  'Maria',
        'saldo'     =>  1000
    ],

    '123.456.789-12' => [
        'titular'   =>  'Alberto',
        'saldo'     =>  300
    ]
];

// Caso a chave do array associativo tenha algum significado, precisamos manter o padrão existente nos demais, abaixo, como não declaramos a chave e as chaves anteriores são strings, esse registro será salvo com o índice númerico 0.
// $contasCorrentes[] = [
//     'titular'   =>  'Claudia',
//     'saldo'     =>   600 
// ];

// Já aqui, existe a colocação de forma correta do índice do array em string
$contasCorrentes['123.456.789-13'] = [
    'titular'   =>  'Claudia',
    'saldo'     =>   600 
];


foreach($contasCorrentes as $cpf => $conta)
{
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}