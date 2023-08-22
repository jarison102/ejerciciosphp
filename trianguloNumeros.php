<?php 

function numeros(){
    if($numero=$_POST['Numeros']){
        $numero=$_POST['Numeros'];
        if($numero == 320){
            for($i = 160; $i <= 320; $i += 20 ){
                echo ($i . "<br>");
            }
        }
    }
}
numeros()

?>