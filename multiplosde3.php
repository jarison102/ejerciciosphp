<?php 
function multiplos(){
    if($Numero = $_POST ['Multiplo']){
        $Numero = $_POST ['Multiplo'];
        if($Numero % 3 === 0){
            for($i = 3; $i <= $Numero; $i += 3){
                echo($i . "<br>");
            }
        }
    }
}
multiplos()




?>