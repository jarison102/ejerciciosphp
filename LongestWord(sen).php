<?php 

function LongestWord(){
    if($palabra = $_POST['Primera'] && $palabra2 = $_POST['segunda'] ){
        $palabra = $_POST['Primera'];
        $palabra2 = $_POST['segunda'];
        if(strlen($palabra) > strlen($palabra2)){
            $palabraMaslarga = $palabra;
        }else if (strlen($palabra) === strlen($palabra2)){
            echo ("Son del mismo tamaño");
        }else{
            $palabraMaslarga = $palabra2;
        }
        echo ($palabraMaslarga);
    }
}
LongestWord()


?>