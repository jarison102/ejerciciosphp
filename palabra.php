<?php 

function Palabras(){
    if($Palabra=$_POST['palabra']){
        $Palabra=$_POST['palabra'];
        $palabraRevertida = strrev($Palabra);
        for($i = $palabraRevertida; $i == $palabraRevertida; $i++){
            echo $palabraRevertida;
        }
    }else{
        echo "No hay palabra";
    }
}
Palabras()


?>