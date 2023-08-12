<?php 
// Captura el valor enviado por el formulario o establece 0 como valor predeterminado.
$Valor = isset($_POST['Valor']) ? $_POST['Valor'] : 0;

// Verifica si el valor es menor a 30.
if ($Valor < 30) {
    // Muestra un mensaje en negrita indicando que se deben comprar más productos o se cobrarán 30 euros de gastos de envío.
    echo "<strong>Compra más o te cobraremos los abusivos 30 euros de gastos de envío</strong>";
}
// Verifica si el valor está entre 30 (inclusive) y 90 (exclusivo).
elseif ($Valor >= 30 && $Valor < 90) {
    // Calcula cuánto falta para llegar a 90 euros y lo almacena en la variable $falta.
    $falta = 90 - $Valor;
    // Muestra un mensaje indicando cuánto falta para obtener envío gratuito.
    echo "¡¡¡Con solo $falta € más podrás tener gastos de envío gratis!!!";
}
// Verifica si el valor es igual o mayor a 90.
elseif ($Valor >= 90) {
    // Muestra un mensaje en negrita indicando que los gastos de envío están incluidos.
    echo "<strong>Gastos de envío incluidos</strong>";
}
?>
