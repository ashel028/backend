<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta y Edición de Producto</title>
    <link rel="stylesheet" href="styles.css"> <!-- Aquí debes vincular tu archivo de CSS -->
</head>
<body>
    <div class="form-container">
        <h2>Alta de Producto</h2>
        <form action="procesar.php" method="post">
            <label for="product-name">Nombre del Producto:</label>
            <input type="text" id="product-name" name="product-name" required>
            <label for="product-description">Descripción del Producto:</label>
            <textarea id="product-description" name="product-description" required></textarea>
            <label for="product-price">Precio del Producto:</label>
            <input type="number" id="product-price" name="product-price" required>
            <button type="submit">Guardar Producto</button>
        </form>
    </div>


  <div class="php-conteiner">
  <?php 

   
    $numbers = [];
    for ($i = 1; count($numbers) < 10; $i++) {
        if ($i % 2 === 0) {
            $numbers[] = $i;
        }
    }
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }

   
    $array = ['Pedro', 'Ana', 34, 1];
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    
    $person = ['Nombre' => 'Pedro',
        'Apellido' => 'Torres',
        'Dirección' => 'Av. Mayo 3703',
        'Teléfono' => '1122334455'
    ]; echo "<pre>";
    print_r($person);
    echo "</pre>";

    
    $cities = ['Madrid', 'Barcelona', 'Londres', 'New York', 'Los Ángeles', 'Chicago'];
    foreach ($cities as $index => $city) {
        echo "La ciudad con el índice $index tiene el nombre $city <br>";
    }

    $citiesAssociative = [
        'MD' => 'Madrid',
        'BCL' => 'Barcelona',
        'LD' => 'Londres',
        'NY' => 'New York',
        'LA' => 'Los Ángeles',
        'CCG' => 'Chicago'
    ];

    foreach ($citiesAssociative as $index =>       
  $city) {
        echo "El índice de $city es $index <br>";
    }

    ?>
  </div>

  
</body>
</html>

