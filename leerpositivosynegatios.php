<?php 
function leerpositivosynegativos(){
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        
        if($numero >= 0){
            echo "Números positivos:";
            for($i = 0; $i <= $numero; $i++){
                echo " " . $i;
            }
        } else {
            echo "Números negativos:";
            for($o = 0; $o > $numero; $o--){
                echo " " . $o;
            }
        }
    }
}

leerpositivosynegativos();
?>