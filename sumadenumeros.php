<?php 

function sumadenumeros(){
    if($NumeroP = $_POST ['numero']){
        $NumeroP = $_POST ['numero'];
        $contador = 0;
        if($NumeroP){
            for ($i = 0; $i <= $NumeroP; $i += 1){
                echo ($i ."<br>");
                $contador = $contador + $i;
            }
            echo ("La suma de los numeros son" . $contador);
        }
    }
}

sumadenumeros()



?>