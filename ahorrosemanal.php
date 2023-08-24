<?php 

function ahorro(){
    if($semanal = $_POST ['ahorro']){
        $semanal = $_POST ['ahorro'];
        for($i = $semanal; $i <= $semanal; $i++){
            echo(" Su ahorro total es ". $i * 1.10 );
        }
    }
}

ahorro()





?>