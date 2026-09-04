<?php
// Laboratorio #1
// Realizar un programa que convierta pulgadas a centímetros.
// Imprimir el Resultado.
// 1 pulgada = 2.54 centímetros.
// Leer las pulgadas.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pulgadas"])) {
    $pulgadas = (float) $_POST["pulgadas"];
    $centimetros = $pulgadas * 2.54;

    echo "<div class='resultado'>";
    echo "<h2>Resultado</h2>";
    echo "<p>Las pulgadas ingresadas son: <strong>$pulgadas</strong></p>";
    echo "<p>El resultado en centímetros es: <strong>$centimetros cm</strong></p>";
    echo "</div>";
}
?>

<html>
<head>
    <title>Conversión de pulgadas a centímetros</title>

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
            border: 1px solid #b7dfb9;
            border-radius: 10px;
            box-sizing: border-box;
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
        <h1>Conversión de pulgadas a centímetros</h1>

        <form method="post" action="">
            <label for="pulgadas">Ingrese las pulgadas:</label>

            <input type="text" name="pulgadas" id="pulgadas">

            <input type="submit" value="Convertir">
        </form>
    </div>

</body>
</html>
