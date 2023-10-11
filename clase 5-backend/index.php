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
  if (isset($_POST['nombre']) && isset($_POST['nota'])) {
      $nombre = $_POST['nombre'];
      $nota = $_POST['nota'];

      if (is_numeric($nota)) {
          if ($nota >= 0 && $nota <= 10) {
              if ($nota >= 0 && $nota <= 2) {
                  $calificacion = "Muy deficiente";
              } elseif ($nota >= 3 && $nota <= 5) {
                  $calificacion = "Insuficiente";
              } elseif ($nota >= 6 && $nota <= 7) {
                  $calificacion = "Bien";
              } elseif ($nota >= 8 && $nota <= 9) {
                  $calificacion = "Notable";
              } elseif ($nota == 10) {
                  $calificacion = "Sobresaliente";
              }
              echo "Nombre del alumno: $nombre<br>";
              echo "Calificación: $calificacion";
          } else {
              echo "La nota debe estar entre 0 y 10.";
          }
      } else {
          echo "La nota no es un número válido.";
      }
  } else {
      echo "Faltan datos. Por favor, ingresa el nombre y la nota del alumno.";
  }
  ?>


    </div>
</body>
</html>

