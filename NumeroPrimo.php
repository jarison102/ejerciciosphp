<?php 


function NumersPrime() {
    if (isset($_POST['Numero'])) {
        $Numero = intval($_POST['Numero']);
        
        if ($Numero <= 1) {
            echo "$Numero no es un número primo."; // Los números menores o iguales a 1 no son primos
        } else {
            $esPrimo = true;
            
            for ($i = 2; $i <= $Numero / 2; $i++) {
                if ($Numero % $i === 0) {
                    $esPrimo = false;
                    break;
                }
            }

            if ($esPrimo) {
                echo "$Numero es un número primo.";
            } else {
                echo "$Numero no es un número primo.";
            }
        }
    } else {
        echo "Por favor, ingrese un número.";
    }
}

NumersPrime();
?>


