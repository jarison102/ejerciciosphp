<?php
function verificarCadena() {
    if(isset($_POST['Palabra']) && isset($_POST['Numeros'])) {
        $palabra = $_POST['Palabra'];
        $Numeros = $_POST['Numeros'];

        if($palabra && $Numeros) {
            $cadenaConTresSignos = str_repeat("?", 3); // Creamos una cadena de 3 signos de interrogación

            if($Numeros > 10 && (strpos($palabra, $cadenaConTresSignos) !== false)) {
                echo "Más de 10: Cadena falsa (False) y tiene más de 3 signos de interrogación";
            } elseif ($Numeros <= 10) {
                echo $palabra . " " . ($Numeros + $Numeros) . ": Cadena verdadera (TRUE)";
            } else {
                echo "Otra condición";
            }
        }
    }
}

verificarCadena();
?>