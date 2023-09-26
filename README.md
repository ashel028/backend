
//clase4
<?php
// Ejercicio 1
$n1 = 5; // Cambia el valor de $n1 según lo necesites

if ($n1 > 0) {
    echo "El número ingresado es un número positivo<br>";
}

// Ejercicio 2
$n2 = 7; // Cambia el valor de $n2 según lo necesites

if ($n2 > 1 && $n2 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10<br>";
}

// Ejercicio 3
$n3 = 12; // Cambia el valor de $n3 según lo necesites

if ($n3 >= 10 || $n3 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2<br>";
} else {
    echo "El número ingresado no pudo ser validado<br>";
}

// Ejercicio 4
$numero1 = 8; // Cambia el valor de $numero1 según lo necesites
$numero2 = 6; // Cambia el valor de $numero2 según lo necesites

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "La suma de $numero1 y $numero2 es $suma<br>";
    echo "La resta de $numero1 y $numero2 es $resta<br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $divisionEntera = (int)($numero1 / $numero2);
    $resto = $numero1 % $numero2;
    echo "La multiplicación de $numero1 y $numero2 es $multiplicacion<br>";
    echo "La división entera de $numero1 entre $numero2 es $divisionEntera<br>";
    echo "El resto de la división de $numero1 entre $numero2 es $resto<br>";
} else {
    echo "Los números ingresados son iguales<br>";
}
?>


/*
//clase3
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicios PHP</title>
</head>
<body>
<?php
// Ejercicio 1
echo "1) Hola mundo<br>";

// Ejercicio 2
$mensaje = "Hola mundo";
echo "2) $mensaje<br>";

// Ejercicio 3
$numero1 = 10;
$numero2 = 5;
echo "3) Suma: " . ($numero1 + $numero2) . "<br>";
echo "   Resta: " . ($numero1 - $numero2) . "<br>";
echo "   Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "   División entera: " . (int)($numero1 / $numero2) . "<br>";
echo "   Resto de la división entera: " . ($numero1 % $numero2) . "<br>";

// Ejercicio 4
$gradosCelsius = 20;
$gradosFahrenheit = ($gradosCelsius * 9/5) + 32;
echo "4) $gradosCelsius°C es igual a $gradosFahrenheit°F<br>";

// Ejercicio 5
$baseRectangulo = 18;
$alturaRectangulo = 12;
$radioCirculo = 30;

$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
$areaRectangulo = $baseRectangulo * $alturaRectangulo;

$perimetroCirculo = 2 * M_PI * $radioCirculo;
$areaCirculo = M_PI * pow($radioCirculo, 2);

echo "5) Para el rectángulo:<br>";
echo "   Perímetro: $perimetroRectangulo cm<br>";
echo "   Área: $areaRectangulo cm²<br>";



echo "   Para el círculo:<br>";
echo "   Perímetro: $perimetroCirculo cm<br>";
echo "   Área: $areaCirculo cm²<br>";
?>
</body>
</html>
*/

