<?php
// Laboratorio #1
// Programa que:
// 1) Pide por teclado el radio (dato real) de una circunferencia.
// 2) Calcula el área de la circunferencia.
// 3) Muestra por pantalla el resultado.
//
// Área = pi * r^2      Perímetro = 2 * pi * r

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["radio"])) {
    $radio = (float) $_POST["radio"];

    $area = pi() * ($radio ** 2);
    $perimetro = 2 * pi() * $radio;

    echo "<div class='resultado'>";
    echo "<h2>Resultado</h2>";
    echo "<p>El radio ingresado es: <strong>$radio</strong></p>";
    echo "<p>El área de la circunferencia es: <strong>" . round($area, 2) . "</strong></p>";
    echo "<p>El perímetro de la circunferencia es: <strong>" . round($perimetro, 2) . "</strong></p>";
    echo "</div>";
}
?>

<html>
<head>
    <title>Área y perímetro de un círculo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 50px;
        }

        .contenedor {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .resultado {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #e8f5e9;
            border-radius: 10px;
            border: 1px solid #b7dfb9;
        }

        .resultado h2 {
            margin-top: 0;
            color: #2e7d32;
        }

        .resultado p {
            color: #333;
        }
    </style>
</head>

<body>

    <div class="contenedor">
        <h1>Área y perímetro de un círculo</h1>

        <form method="post" action="">
            <label for="radio">Ingrese el radio:</label>

            <input type="text" name="radio" id="radio">

            <input type="submit" value="Calcular">
        </form>
    </div>

</body>
</html>