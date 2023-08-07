<?php

echo '<h1 style="color: red;">Bienvenido a la Resta</h1>';

function sumar($num1, $num2) {
	echo '<h1>___________________________________</h1>';
	echo '<h3 style="color: blue;">Operacion Resta</h3>';
    $resultado = "La resta es: " . ($num1 - $num2);
    return $resultado;
	
}

$suma = sumar(10, 5);

// Mostrar el resultado
echo $suma;

?>