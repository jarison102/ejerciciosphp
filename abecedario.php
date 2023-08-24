<?php 

function abecedario(){
    if($letra = $_POST ['letra']){
        $letra = $_POST ['letra'];
        if($letra == "A" < "Z"){
            for($i = $letra; $i < "Z"; $i++){
                echo($i . "<br>"); 
            }
            echo ("Z");
        }
    }
}
abecedario()


?>