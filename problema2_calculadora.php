<?php
// Problema #2 Laboratorio
// Escribir el script en PHP que realice una calculadora que tenga
// operaciones de sumar, restar, multiplicar y redondear decimales.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"], $_POST["num2"], $_POST["operacion"])) {
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $operacion = $_POST["operacion"];

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
    echo "<br><br>";
}
?>
<html>
<head>
    <title>Calculadora en PHP</title>
</head>
<body>
    <form method="post" action="">
        Número 1: <input type="text" name="num1" id="num1"><br><br>
        Número 2 (no se usa para redondear): <input type="text" name="num2" id="num2"><br><br>
        Operación:
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear (usa Número 1)</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
