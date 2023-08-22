<?php 

function FizzBuzz(){
    if($Dibisibles= $_POST['Divisibles']){
        $Dibisibles= $_POST['Divisibles'];
        if($Dibisibles % 3 === 0){
            for($i = $Dibisibles; $i <= $Dibisibles; $i++){
                echo ($i. " Fizz");
            }
        }
        else if ($Dibisibles % 5 === 0){
           for($i = $Dibisibles; $i <= $Dibisibles; $i++ ){
            echo ($i . " Buzz");
            break;
           }
        }if ($Dibisibles % 5 === 0 && $Dibisibles % 3 === 0){
            for($i = $Dibisibles; $i <= $Dibisibles; $i++ ){
                echo ( " FizzBuzz");
                break;
               } 
        }else{
            echo ($Dibisibles);
        }
    }
}
FizzBuzz()





?>