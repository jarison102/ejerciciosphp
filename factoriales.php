
<?php 

function factorial(){
    if($numero = $_POST ['entero']){
        $numero = $_POST ['entero'];
        if($numero % 2 === 0){
            for($i = 1; $i <= 6; $i += 1){
                echo ($i*4 . "<br>");
            }
        }
    }
}
factorial()



?>