<?php



function numero()
{
    $Numero1 = $_POST['Primer'];
    $Numero2 = $_POST['Segundo'];

    if ($Numero1 > $Numero2) {
        echo ("el numero mayor es " . $Numero1);
    } else if ($Numero2 > $Numero1) {
        echo ("el numero mayor es " . $Numero2);
    } else if ($Numero2 == $Numero1) {
        echo ("Los numeros son iguales");
    } else {
        echo ("Numero invalidos");
    }
}

numero();