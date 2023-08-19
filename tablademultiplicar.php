<?php 

function tabla() {
    if ($numero = $_POST['Tabla']) {
        $numero = $_POST['Tabla'];
        if ($numero < 0) {
            echo ("ME");
        }
    }
    // Verifica si $numero tiene un valor (no es nulo y no es 0 ni false)
    if ($numero) {
        // Verifica si $numero es par
        if ($numero % 2 === 0) {
            // Bucle que itera desde 2 hasta 20 de 2 en 2 (números pares)
            for ($i = 2; $i <= 10; $i += 2) {
                // Bucle que itera desde 1 hasta 10 (tabla de multiplicar)
                for ($o = 1; $o <= 10; $o += 1) {
                    // Imprime la multiplicación de $i y $o y el resultado
                    echo ("$i X $o = " . ($i * $o) . "<br>");
                }
            }
        }
    }
}

tabla();
/*
function tabla() {
    if ($numero = $_POST['Tabla']) {
        $numero = $_POST['Tabla'];
        if ($numero === "2") { // Verifica si el número es exactamente igual a "2"
            for ($o = 2; $o <= 10; $o += 1) {
                echo ("2 X $o = " . (2 * $o) . "<br>");
            }
        } else {
            echo ("El número debe ser 2 para mostrar la tabla.");
        }
    }
}

tabla();
?>
*/
?>

