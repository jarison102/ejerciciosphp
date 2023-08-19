<?php 

function Impares(){
    if($Impares = $_POST ['Impares']){
        $Impares = $_POST ['Impares'];
        if($Impares >= 1 && $Impares % 2 === 1){
                for($i = 1; $i <= $Impares; $i += 2){// Incrementar en 2 para obtener solo los impares
                    echo ($i . " Es impar") . "<br>";
                }
        }else {
            echo "Por favor, ingresa un número impar mayor o igual a 1.";
        }
    }
}

Impares()




?>