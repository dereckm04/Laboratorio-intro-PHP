<?php
// Problema #2 Laboratorio
// Escribir el script en PHP que realice una calculadora que tenga
// operaciones de sumar, restar, multiplicar y redondear decimales.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"], $_POST["num2"], $_POST["operacion"])) {
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $operacion = $_POST["operacion"];

    echo "<div class='resultado'>";

    switch ($operacion) {
        case "sumar":
            $resultado = $num1 + $num2;
            echo "La suma de $num1 y $num2 es: " . round($resultado, 2);
            break;

        case "restar":
            $resultado = $num1 - $num2;
            echo "La resta de $num1 y $num2 es: " . round($resultado, 2);
            break;

        case "multiplicar":
            $resultado = $num1 * $num2;
            echo "La multiplicación de $num1 y $num2 es: " . round($resultado, 2);
            break;

        case "redondear":
            echo "El número $num1 redondeado es: " . round($num1);
            break;

        default:
            echo "Operación no válida";
    }

    echo "</div>";
}
?>

<html>

<head>
    <title>Calculadora en PHP</title>

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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        select {
            background-color: white;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .resultado {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #e8f5e9;
            border: 1px solid #b7dfb9;
            border-radius: 10px;
            color: #2e7d32;
            text-align: center;
            font-size: 17px;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="contenedor">

        <h1>Calculadora en PHP</h1>

        <form method="post" action="">

            <label for="num1">Número 1:</label>
            <input type="text" name="num1" id="num1">

            <label for="num2">Número 2 (no se usa para redondear):</label>
            <input type="text" name="num2" id="num2">

            <label for="operacion">Operación:</label>

            <select name="operacion" id="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="redondear">Redondear (usa Número 1)</option>
            </select>

            <input type="submit" value="Calcular">

        </form>

    </div>

</body>

</html>
