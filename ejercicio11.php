<?php
// Definición de la función para calcular y mostrar la inversión año a año
function inversion() {
    // Verificamos si se enviaron los datos del formulario
    if(isset($_POST['Cantidad_a_invertir'], $_POST['Interés_anual'], $_POST['Número_de_años'])) {
        // Obtenemos los valores del formulario
        $Invertir = floatval($_POST['Cantidad_a_invertir']); // Convertimos a número decimal
        $Interes = floatval($_POST['Interés_anual']); // Convertimos a número decimal
        $Años = intval($_POST['Número_de_años']); // Convertimos a número entero

        // Calculamos y mostramos el capital obtenido cada año
        for($i = 1; $i <= $Años; $i++) {
            // Fórmula de interés compuesto
            // Cálculo del capital acumulado para el año actual
            $Capital = $Invertir * (1 + ($Interes / 100)) ** $i; 
            
            // Mostramos el resultado formateado
            echo "Año $i: Capital obtenido = $". number_format($Capital, 2) . "<br>";
        }
    }else {
        echo "MEeeeee";
    }
}

// Llamamos a la función para calcular y mostrar la inversión
inversion();
?>
