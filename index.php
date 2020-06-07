<?php
require 'Calculadora.php';

$notas = [
    9,
    3,
    10,
    5,
    10,
    8
];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

echo "<p>a nota de português é:  $notas[0]</p>";
echo "<p>a nota de matemática é: $notas[1]</p>";
echo "<p>a nota de geografia é:  $notas[2]</p>";
echo "<p>a nota de história é:   $notas[3]</p>";
echo "<p>a nota de quimica é:    $notas[4]</p>";
echo "<p>a nota de artes é:      $notas[5]</p>";

if($media)
{
    echo "A média é: $media";
}
else
{
    echo "Não foi possível calcular a média";
}