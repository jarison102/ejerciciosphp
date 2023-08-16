<?php 

function primos(){
    if($numeros = $_POST['numeros']){
        $numeros = $_POST['numeros'];
        if($numeros <= 1){
            echo ($numeros . " No es primo");
        }else{
            for($i = $numeros; $i <= $numeros; $i++){
                if($numeros % $i === 0){
                    echo ($i . " Es primo");
                    break;
                }
            }
        }
    }else{
        echo "Es escribe un numero mal";
    }
    
}

primos()

// Imprime todos los numeros 

/*
function esPrimo($numero) {
    if ($numero <= 1) {
        return "No es primo";
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return "No es primo";
            }
        }
        return "Es primo";
    }
}

if (isset($_POST['numeros'])) {
    $numeros = $_POST['numeros'];

    for ($i = 2; $i <= $numeros; $i++) {
        echo $i . ": " . esPrimo($i) . "<br>";
    }
} else {
    echo "Por favor, introduce un número.";
}
*/
?>