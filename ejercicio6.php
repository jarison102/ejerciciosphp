<?php
$Primer = isset($_POST['Primer']) ? $_POST['Primer'] : 0;
// Se verifica si el valor 'Primer' fue enviado a través del formulario POST.
// Si está definido, se asigna a la variable $Primer, de lo contrario, se asigna 0.
$Segundo = isset($_POST['Segundo']) ? $_POST['Segundo'] : 0;
$Tercero = isset($_POST['Tercero']) ? $_POST['Tercero'] : 0;
$Cuarto = isset($_POST['Cuarto']) ? $_POST['Cuarto'] : 0;


$mayor = $Primer; // Se inicializa la variable $mayor con el valor de $Primer.
// Al principio, asumimos que $Primer es el número más grande.

if ($Segundo > $mayor) {
    // Se compara si el valor de $Segundo es mayor que el valor actual de $mayor.
    // Si es verdadero, significa que $Segundo es el número más grande encontrado hasta ahora,
    // entonces se actualiza el valor de $mayor con $Segundo.
    $mayor = $Segundo;
}

if ($Tercero > $mayor) {
    // Similar a la comparación anterior pero para $Tercero.
    $mayor = $Tercero;
}

if ($Cuarto > $mayor) {
    // Similar a las comparaciones anteriores pero para $Cuarto.
    $mayor = $Cuarto;
}

// Después de las comparaciones, en $mayor tendremos el número más grande de los cuatro.

echo "El mayor de los cuatro números es: " . $mayor;
// Se muestra un mensaje en pantalla que indica cuál de los cuatro números es el mayor.

?>
