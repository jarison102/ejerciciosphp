<?php 

function calculadr(){
    if($numero = $_POST ['numero']){
        $numero = $_POST ['numero'];
        if($numero % 2 === 0 ){
            for($i = $numero; $i <= $numero; $i += 2){
                echo ($i . " Numero Par " . "<br>");
            }
        }else{
            if($numero % 1 === 0){
                for($o = $numero; $o <= $numero; $o += 2){
                    echo($o. " Numero impar " . "<br>");
                }
            }
        }
    }
}
calculadr()



?>