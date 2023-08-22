<?php

function triangulo() {
    if (isset($_POST['numero'])) {
        $Entero = intval($_POST['numero']);

        for ($i = 1; $i <= $Entero; $i++) { // Bucle para controlar las filas del triángulo
            for ($j = 1; $j <= $i; $j++) { // Bucle para imprimir los asteriscos en cada fila
                echo "*"; // Imprime un asterisco en la posición actual
            }
            echo "<br>"; // Salto de línea para pasar a la siguiente fila después de imprimir los asteriscos
        }
    }
}

triangulo(); // Llamar a la función para generar el triángulo rectángulo

?>
