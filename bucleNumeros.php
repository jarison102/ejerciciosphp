<?php 

function ciclo(){
    if($Numeros = $_POST ['Numerador']){
        $Numeros = $_POST ['Numerador'];
        if($Numeros >= 2){
            if($Numeros % 2 === 0){
                    for($i=$Numeros; $i <= 30; $i++){
                        if($i % 2 === 0){
                            echo ($i . "<br>");
                        }
                    }
            }
        }
    }
}

ciclo()

?>