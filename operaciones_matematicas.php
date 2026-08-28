<?php
// Realizar las operaciones matemáticas en PHP #2

// 1) Suma
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma"; // La suma de 4 y 7 es: 11
echo "<br>";

// 2) Resta
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta"; // La resta de 10 y 3 es: 7
echo "<br>";

// 3) Multiplicación
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicación de $num1 y $num2 es: $multiplicacion"; // 30
echo "<br>";

// 4) División
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La división de $num1 y $num2 es: $division"; // 5
echo "<br>";

// 5) Módulo
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo"; // 3
echo "<br>";

// 6) Potenciación
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia"; // 8
echo "<br>";

// Redondeo: round(), ceil() y floor()
$numero = 4.6;
$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El número redondeado es: $redondeado"; // 5
echo "<br>";
echo "El número redondeado hacia arriba es: $redondeado_arriba"; // 5
echo "<br>";
echo "El número redondeado hacia abajo es: $redondeado_abajo"; // 4
echo "<br>";

// Ejemplos adicionales del operador módulo con negativos
echo (5 % 3)."<br>";    // muestra 2
echo (5 % -3)."<br>";   // muestra 2
echo (-5 % 3)."<br>";   // muestra -2
echo (-5 % -3)."<br>";  // muestra -2

// Valor absoluto: abs()
$numero = -7;
$valor_absoluto = abs($numero);
echo "El valor absoluto de $numero es: $valor_absoluto"; // 7
?>
