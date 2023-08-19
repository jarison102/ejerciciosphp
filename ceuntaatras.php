<?php 

function CeuntaAtras(){
    if($Comienzo =$_POST ['Numero']){
        $Comienzo =$_POST ['Numero'];
        for($i = $Comienzo; $i >= 0; $i -= 1){
            echo ($i . "<br>");
        }
    }
}
CeuntaAtras()

?>