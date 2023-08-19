<?php
function calcularMedia() {
    if(isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);
        
        if($numero >= 2 && $numero % 2 === 0) {
            $media = $numero / 2;
            
            echo "La media de los números pares desde 2 hasta $numero es: " . $media;
        } else {
            echo "Por favor, ingrese un número entero par mayor o igual a 2.";
        }
    } else {
        echo "Por favor, ingrese un número.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    calcularMedia();
}
?>