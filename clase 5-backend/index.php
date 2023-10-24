<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>


<?php
// 1) Mostrar los números del 1 al 9.
echo "1) Mostrar los números del 1 al 9: ";
for ($i = 1; $i <= 9; $i++) {
    echo $i . " ";
}
echo "\n";

// 2) Mostrar los números del 9 al 1.
echo "2) Mostrar los números del 9 al 1: ";
for ($i = 9; $i >= 1; $i--) {
    echo $i . " ";
}
echo "\n";

// 3) Mostrar los números pares del 1 al 20.
echo "3) Mostrar los números pares del 1 al 20: ";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "\n";

// 4) Mostrar los números impares del 1 al 20.
echo "4) Mostrar los números impares del 1 al 20: ";
for ($i = 1; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "\n";

// 5) Mostrar la suma de los números del 1 al 20.
$sum = 0;
for ($i = 1; $i <= 20; $i++) {
    $sum += $i;
}
echo "5) La suma de los números del 1 al 20 es: " . $sum . "\n";

// 6) Mostrar la suma de los números pares del 1 al 20.
$evenSum = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $evenSum += $i;
}
echo "6) La suma de los números pares del 1 al 20 es: " . $evenSum . "\n";
?>

</body>
</html>
