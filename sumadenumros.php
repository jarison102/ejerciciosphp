<?php 


function sumadenumeros(){
     if($numero = $_POST['PrimerN'] && $numero2 = $_POST['SegundoN']){
        $numero = $_POST['PrimerN'];
        $numero2 = $_POST['SegundoN'];
        if($numero && $numero2){
            $resultado = $numero +$numero2;
            echo ($resultado);
        }
     }
}
sumadenumeros()

?>