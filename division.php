<?php

echo '<h1 style="color: red;">Bienvenido a la Division</h1>';

function sumar($num1, $num2) {
	echo '<h1>___________________________________</h1>';
	echo '<h3 style="color: blue;">Operacion Division</h3>';
    $resultado = "La suma es: " . ($num1 / $num2);
    return $resultado;
	
}

$suma = sumar(5, 5);

echo $suma;

?>