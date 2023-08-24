<?php 

function bucle(){
    if($numero = $_POST['Numero']){
        $numero = $_POST['Numero'];
        if($numero >= 50){
            if($numero % 2 === 0){
                for($i = $numero; $i <= 500; $i += 25 ){
                    echo ($i . "<br>");
                }
            }
        }else{
            echo ("Escribe un numero mayor al 50 ");
        }
    }
}
bucle()


?>