<?php
$primerNumero = $_GET['primero'];
$segundoNumero = $_GET['segundo'];

echo "Primer número: $primerNumero<br>";
echo "Segundo número: $segundoNumero<br><br>";

if ($primerNumero > $segundoNumero) {
    echo "El número mayor es: $primerNumero";
} elseif ($segundoNumero > $primerNumero) {
    echo "El número mayor es: $segundoNumero";
} else {
    echo "Ambos números son iguales: $primerNumero";
}
?>