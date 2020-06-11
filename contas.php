<?php
declare(strict_types=1);

namespace Alura;

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

ArrayUtils::remover("Giovanni", $correntistas_e_compras);
