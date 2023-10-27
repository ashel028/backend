<?php
// Ejercicio a
$primeros_pares = [];
for ($i = 2; $i <= 20; $i += 2)
{
    $primeros_pares[] = $i;
}
echo "a) Los primeros 10 números pares son: <br>";
foreach ($primeros_pares as $par)
{
    echo $par . "<br>";
}

// Ejercicio b
$datos = ["Pedro", "Ana", 34, 1];
echo "<br>b) Esquema del array con print_r(): <br>";
print_r($datos);

// Ejercicio c
$informacion =
[
    "Nombre" => "Pedro";
    "Apellido" => "Torres";
    "Dirección" => "Av. Mayo 3703";
    "Teléfono" => "1122334455";
];
echo "<br>c) Array asociativo de información personal: <br>";
print_r($informacion);

// Ejercicio d
$ciudades =
["Madrid" "Barcelona" "Londres" "New York" "Los Ángeles" "Chicago"];
echo "<br>d) Ciudades: <br>";
foreach ($ciudades as $index => $ciudad)
{
    echo "La ciudad con el índice $index tiene el nombre $ciudad <br>";
}

// Ejercicio e
$ciudades_asociativas =
 [
    "MD" => "Madrid";
    "BCL" => "Barcelona";
    "LD" => "Londres";
    "NY" => "New York";
    "LA" => "Los Ángeles";
    "CCG" => "Chicago";
];
echo "<br>e) Ciudades asociativas: <br>";
foreach ($ciudades_asociativas as $index => $ciudad) {
    echo "El índice de $ciudad es $index <br>";
}
?>
