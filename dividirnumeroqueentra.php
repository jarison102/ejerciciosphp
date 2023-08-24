<?php 


function dividir(){
    if($numero = $_POST['dividir']){
        $numero = $_POST['dividir'];
        if($numero < 100){
            echo ("Escribe un numero mayor");
        }
    }if($numero >= 100 && $numero <=500){
        if($numero % 2 === 0){
            for($i = $numero; $i <= 500; $i += 100){
                echo($i / 20 ."<br>");
            }
        }
    }
}

dividir()




?>