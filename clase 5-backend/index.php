<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 6 - Tarea PD - Programación Back End</title>
</head>

<body>
    <h2>Tarea 1: Factorial de 8</h2>
    <?php
    // Tarea 1: Factorial de 8
    $num = 8;
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "<p>El factorial de 8 es: " . $factorial . "</p>";

    // Tarea 2 y 3: Calificación del alumno
    if (isset($_POST['submit'])) {
        $alumno = $_POST['alumno'];
        $nota = $_POST['nota'];
        $mensaje = "";

        if (empty($alumno)) {
            $mensaje = "El nombre del alumno no ha sido ingresado.";
        } elseif (empty($nota)) {
            $mensaje = "La nota no ha sido ingresada.";
        } elseif (!is_numeric($nota)) {
            $mensaje = "La nota no es un número.";
        } elseif ($nota < 0 || $nota > 10) {
            $mensaje = "La nota no está en el rango válido (0-10).";
        } else {
            if ($nota >= 0 && $nota <= 2) {
                $mensaje = "Muy deficiente";
            } elseif ($nota >= 3 && $nota <= 5) {
                $mensaje = "Insuficiente";
            } elseif ($nota >= 6 && $nota <= 7) {
                $mensaje = "Bien";
            } elseif ($nota >= 8 && $nota <= 9) {
                $mensaje = "Notable";
            } elseif ($nota === 10) {
                $mensaje = "Sobresaliente";
            }
            echo "<h2>Calificación de $alumno</h2>";
            echo "<p>La nota ingresada es: $nota - $mensaje</p>";
        }
        if (!empty($mensaje)) {
            echo "<p style='color: red;'>$mensaje</p>";
        }
    }
    ?>

    <h2>Tarea 2: Formulario de calificación</h2>
    <form action="" method="post">
        <label for="alumno">Nombre del alumno:</label><br>
        <input type="text" id="alumno" name="alumno"><br><br>
        <label for="nota">Nota:</label><br>
        <input type="text" id="nota" name="nota"><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>

