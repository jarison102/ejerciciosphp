<?php 

function numerosenteros(){
    if($numero = $_POST ['Entero']){
        $numero = $_POST ['Entero'];
        if($numero >= 2){
            if($numero % 2 === 0){
                for($i = $numero; $i <= 20; $i +=2 ){
                    echo ($i. " Numeros Pares " ."<br>");
                }
                if($numero % 1 === 0){
                    for ($o = 1; $o <= 20; $o += 2){
                        echo ("<br>" .  $o ." Numero impares ");
                    }
                }
            }
        }
    }
}
numerosenteros()


?>