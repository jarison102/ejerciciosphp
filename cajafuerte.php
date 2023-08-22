<?php 

function contraseña(){
    if($numero = $_POST ['Contraseña']){
        $numero = $_POST ['Contraseña'];
        if($numero === "2444"){
            for($i=$numero; $i <= $numero; $i++){
                echo ($i . " La caja fuerte se ha abierto satisfactoriamente");
            }
        }else{
            echo ("Lo siento, esa no es la combinación");
        }
    }
}

contraseña()

?>