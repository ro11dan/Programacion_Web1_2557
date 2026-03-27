<?php
// Verificar que se recibieron los números y la acción mediante POST
if (!isset($_POST['primero']) || !isset($_POST['segundo']) || !isset($_POST['action'])) {
    echo "Error: Faltan datos. Por favor, regresa al formulario y completa los campos.";
    echo '<br><a href="index.php">Volver al formulario</a>';
    exit;
}

$primerNumero = $_POST['primero'];
$segundoNumero = $_POST['segundo'];
$accion = $_POST['action'];


// Mostrar los números ingresados
echo "Primer número: $primerNumero<br>";
echo "Segundo número: $segundoNumero<br><br>";

// Realizar la operación 
switch ($accion) {
    case 'sumar':
        $resultado = $primerNumero + $segundoNumero;
        echo "La suma de $primerNumero + $segundoNumero es: $resultado";
        break;
    case 'restar':
        $resultado = $primerNumero - $segundoNumero;
        echo "La resta de $primerNumero - $segundoNumero es: $resultado";
        break;
    case 'multiplicar':
        $resultado = $primerNumero * $segundoNumero;
        echo "La multiplicación de $primerNumero × $segundoNumero es: $resultado";
        break;
    case 'dividir':
        if ($segundoNumero == 0) {
            echo "Error: No se puede dividir entre cero.";
        } else {
            $resultado = $primerNumero / $segundoNumero;
            echo "La división de $primerNumero ÷ $segundoNumero es: $resultado";
        }
        break;
    default:
        echo "Acción no válida.";
}
?>