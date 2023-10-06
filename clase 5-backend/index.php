<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>axel</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>

    </style>
        body
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="#" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
    <div class="php">

      <?php
      // Ejercicio 1: Mostrar los números del 1 al 9.
      for ($i = 1; $i <= 9; $i++) {
          echo $i . " ";
      }
      echo "<br>";

      // Ejercicio 2: Mostrar los números del 9 al 1.
      for ($i = 9; $i >= 1; $i--) {
          echo $i . " ";
      }
      echo "<br>";

      // Ejercicio 3: Mostrar los números pares del 1 al 20.
      for ($i = 2; $i <= 20; $i += 2) {
          echo $i . " ";
      }
      echo "<br>";

      // Ejercicio 4: Mostrar los números impares del 1 al 20.
      for ($i = 1; $i <= 20; $i += 2) {
          echo $i . " ";
      }
      echo "<br>";

      // Ejercicio 5: Mostrar la suma de los números del 1 al 20.
      $sumaTotal = 0;
      for ($i = 1; $i <= 20; $i++) {
          $sumaTotal += $i;
      }
      echo "La suma de los números del 1 al 20 es: " . $sumaTotal . "<br>";

      // Ejercicio 6: Mostrar la suma de los números pares del 1 al 20.
      $sumaPares = 0;
      for ($i = 2; $i <= 20; $i += 2) {
          $sumaPares += $i;
      }
      echo "La suma de los números pares del 1 al 20 es: " . $sumaPares . "<br>";
      ?>

    </div>
</body>
</html>
