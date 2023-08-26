<?php 

function FirstReverse(){
    if($palabra = $_POST ['palabra']){
        $palabra = $_POST ['palabra'];
        $palabraRevertida = strrev($palabra);
        echo ($palabraRevertida);
    }
}
FirstReverse()



?>