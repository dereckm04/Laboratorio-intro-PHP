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

    echo "El radio ingresado es: $radio<br>";
    echo "El área de la circunferencia es: " . round($area, 2) . "<br>";
    echo "El perímetro de la circunferencia es: " . round($perimetro, 2) . "<br>";
}
?>
<html>
<head>
    <title>Área y perímetro de un círculo</title>
</head>
<body>
    <form method="post" action="">
        Ingrese el radio: <input type="text" name="radio" id="radio">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
