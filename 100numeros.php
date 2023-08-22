<?php 

function Numeros(){
    if($Numero= $_POST['Numero']){
        $Numero= $_POST['Numero'];
            if($Numero <= 1 ){
                echo ($Numero . " No es primo ");
            }else{
                // Supongamos que $Numero es el número que se quiere verificar si es primo
                $esPrimo = true; // Suponemos inicialmente que el número es primo
                for ($i = 2; $i <= $Numero / 2; $i++) {
                        // Verificamos si $Numero es divisible por $i (residuo igual a 0)
                    if ($Numero % $i === 0) {
                        $esPrimo = false;// Si es divisible, no es primo
                        break;
                    }
                }
                // Al salir del bucle, verificamos el estado de $esPrimo para determinar si el número es primo o no
                if ($esPrimo) {
                    echo "$Numero es un número primo.";
                } else {
                    echo "$Numero no es un número primo.";
                }
            }
        
    }else {
        echo "Por favor, ingrese un número.";
    }
}
Numeros()

?>