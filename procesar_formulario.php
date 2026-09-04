<?php
// Aportes para el desarrollo
// Procesa los datos enviados por formulario.php (nombre, edad)

// --- DIAGNÓSTICO TEMPORAL ---
echo "<div class='diagnostico'>";
echo "<pre>Método: " . $_SERVER["REQUEST_METHOD"] . "\n";
echo "Datos POST recibidos: ";
print_r($_POST);
echo "</pre>";
echo "</div>";
// --- fin del bloque de diagnóstico ---

echo "<div class='contenedor'>";

if (isset($_REQUEST['nombre'])) {
    $Nombre = $_REQUEST['nombre'];
    echo "<h2>Datos recibidos</h2>";
    echo "<p>El nombre es: <strong>" . $Nombre . "</strong></p>";
} else {
    echo "<p>No se recibió el nombre. Debe llenar el formulario primero.</p>";
}

$Edad = isset($_POST["edad"]) ? $_POST["edad"] : null;

if (isset($Edad) and $Edad > 18) {

    echo "<p class='permitido'>Usted puede votar en las próximas elecciones 2028.</p>";

} else if (isset($Edad)) {

    echo "<p class='no-permitido'>Usted no es mayor de edad.</p>";

} else {

    echo "<p>No se recibió la edad. Debe llenar el formulario primero.</p>";

}

echo "</div>";
?>

<html>

<head>
    <title>Procesamiento del formulario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 50px;
        }

        .contenedor {
            width: 400px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        strong {
            color: #333;
        }

        .permitido {
            background-color: #e8f5e9;
            border: 1px solid #b7dfb9;
            padding: 12px;
            border-radius: 5px;
            color: #2e7d32;
        }

        .no-permitido {
            background-color: #ffebee;
            border: 1px solid #efb5b5;
            padding: 12px;
            border-radius: 5px;
            color: #c62828;
        }

        .diagnostico {
            width: 400px;
            margin: auto;
            background-color: #eeeeee;
            padding: 15px;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .diagnostico pre {
            margin: 0;
            color: #444;
            white-space: pre-wrap;
        }
    </style>

</head>

<body>

</body>

</html>
