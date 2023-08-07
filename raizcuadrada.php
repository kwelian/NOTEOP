<?php

function raiz($numero)
{
    $resultado = "La raiz cuadrada de $numero  es: " . sqrt($numero);
    return $resultado;
}

$op = raiz(4) . '<br>';
$op2 = raiz(16) . '<br>';
$op3 = raiz(36) . '<br>';
$op4 = raiz(49) . '<br>';

echo $op;
echo $op2;
echo $op3;
echo $op4;
