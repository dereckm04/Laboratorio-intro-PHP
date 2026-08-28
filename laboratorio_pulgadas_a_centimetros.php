<?php
// Laboratorio #1
// Realizar un programa que convierta pulgadas a centímetros.
// Imprimir el Resultado.
// 1 pulgada = 2.54 centímetros.
// Leer las pulgadas.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pulgadas"])) {
    $pulgadas = (float) $_POST["pulgadas"];
    $centimetros = $pulgadas * 2.54;

    echo "Las pulgadas ingresadas son: $pulgadas<br>";
    echo "El resultado en centímetros es: $centimetros<br>";
}
?>
<html>
<head>
    <title>Conversión de pulgadas a centímetros</title>
</head>
<body>
    <form method="post" action="">
        Ingrese las pulgadas: <input type="text" name="pulgadas" id="pulgadas">
        <input type="submit" value="Convertir">
    </form>
</body>
</html>
