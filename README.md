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
