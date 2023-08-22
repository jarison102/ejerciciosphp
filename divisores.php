<?php
function mostrarParesImpares() {
    // Verificar si se han enviado los números desde el formulario
    if (isset($_POST['Numero1']) && isset($_POST['Numero2'])) {
        // Convertir los números enviados a enteros
        $numero1 = intval($_POST['Numero1']);
        $numero2 = intval($_POST['Numero2']);

        // Mostrar un mensaje inicial
        echo "Números pares entre $numero1 y $numero2: ";
        
        // Iterar a través de los números desde $numero1 hasta $numero2
        for ($i = $numero1; $i <= $numero2; $i++) {
            // Verificar si el número actual es par
            if ($i % 2 === 0) {
                // Mostrar el número par actual
                echo "$i ";
            }
        }
        echo "<br>";

        // Mostrar otro mensaje
        echo "Números impares entre $numero1 y $numero2: ";
        
        // Iterar a través de los números desde $numero1 hasta $numero2
        for ($i = $numero1; $i <= $numero2; $i++) {
            // Verificar si el número actual es impar
            if ($i % 2 !== 0) {
                // Mostrar el número impar actual
                echo "$i ";
            }
        }
    }
}

// Llamar a la función para mostrar los números pares e impares
mostrarParesImpares();
?>
