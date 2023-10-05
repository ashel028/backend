<?php
// Ejercicio 1
$n1 = 5; // Cambia el valor de n1 según sea necesario

if ($n1 > 0) {
    echo "El número ingresado es un número positivo.<br>";
}

// Ejercicio 2
$n2 = 7; // Cambia el valor de n2 según sea necesario

if ($n2 > 1 && $n2 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10.<br>";
}

// Ejercicio 3
$n3 = 12; // Cambia el valor de n3 según sea necesario

if ($n3 >= 10 || $n3 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2.<br>";
} else {
    echo "El número ingresado no pudo ser validado.<br>";
}

// Ejercicio 4
$numero1 = 8; // Cambia el valor de numero1 según sea necesario
$numero2 = 4; // Cambia el valor de numero2 según sea necesario

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "La suma es: $suma<br>";
    echo "La resta es: $resta<br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division = (int)($numero1 / $numero2);
    $resto = $numero1 % $numero2;
    echo "La multiplicación es: $multiplicacion<br>";
    echo "La división entera es: $division<br>";
    echo "El resto es: $resto<br>";
} else {
    echo "Los números ingresados son iguales.<br>";
}
?>
