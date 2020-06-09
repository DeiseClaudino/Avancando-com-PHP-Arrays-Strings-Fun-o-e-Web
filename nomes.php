<?php

$nomes = "Giovani, João, Maria, Pedro";
$array_nomes = explode(" ", $nomes);

foreach($array_nomes as $nome)
{
    echo "<p>Olá $nome </p>";
}

$nomes_juntos = implode(",", $array_nomes);
echo $nomes_juntos;