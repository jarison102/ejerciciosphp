<?php 
function cadenas(){
    if($numero = $_POST ['numero']){
        $numero = $_POST ['numero'];
        $cadenaacendente=['1','2','3','4','5','6','7','8','10','11','12','13','14','15','16','17'];
        sort($cadenaacendente);

        $cadenadendente=['1','3','2','10','5','6','7','8','4','11','14','13','12','15','16','17'];
        rsort($cadenadendente);
        
        if($numero % 2 === 0){
                foreach ($cadenaacendente as $verdadera){
                    echo ($verdadera . " Tu cadena es acendente " . "<br>");
                }
        
        }else{
            foreach($cadenadendente as $verdadera2){
                echo ($verdadera2 . " Tu cadena es decendente " . "<br>");
            }
        }
    }

}

cadenas()

?>
