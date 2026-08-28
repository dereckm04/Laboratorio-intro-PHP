<?PHP
// Aportes para el desarrollo
// Procesa los datos enviados por formulario.php (nombre, edad)

if (isset($_REQUEST['nombre'])) {
    $Nombre = $_REQUEST['nombre'];
    echo "El nombre es: " . $Nombre . "<br>";
} else {
    echo "No se recibió el nombre. Debe llenar el formulario primero.<br>";
}

$Edad = isset($_POST["edad"]) ? $_POST["edad"] : null;

if (isset($Edad) and $Edad > 18) {

    //Acciones

    echo "usted puede votar en las próximas elecciones 2028";
} else if (isset($Edad)) {
    echo "Usted no es mayor de edad";
} else {
    echo "No se recibió la edad. Debe llenar el formulario primero.";
}

?>
