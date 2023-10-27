<?php

// Ejercicio a
function calcularCuadrado($lado) {
    $perimetro = 4 * $lado;
    $superficie = $lado * $lado;
    echo "Para un cuadrado de lado $lado, el perímetro es: $perimetro y la superficie es: $superficie <br>";
}

// Ejercicio b
$cadena = "Hola Mundo";

function mostrarMayusculas($cadena) {
    echo strtoupper($cadena) . "<br>";
}

function mostrarMinusculas($cadena) {
    echo strtolower($cadena) . "<br>";
}

// Ejercicio c
function diasEnMes($mes) {
    $dias = ($mes == 2) ? "28 o 29" : (($mes <= 7 && $mes % 2 != 0) || ($mes > 7 && $mes % 2 == 0) ? "31" : "30");
    echo "El mes $mes tiene $dias días <br>";
}

// Ejercicio d
$palabra = "Somos o no somos";

function esPalindromo($palabra) {
    $palabra = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $palabra));
    $reversa = strrev($palabra);
    if ($palabra == $reversa) {
        echo "La palabra \"$palabra\" es un palíndromo <br>";
    } else {
        echo "La palabra \"$palabra\" no es un palíndromo <br>";
    }
}

// Ejecución de las funciones
calcularCuadrado(5);
mostrarMayusculas($cadena);
mostrarMinusculas($cadena);
diasEnMes(2);
esPalindromo($palabra);

?>
