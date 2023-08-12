<?php 
$dia=$_POST['Day'];


if($dia === "Monday" ){
 echo ("tu dia es lunes");
}else if($dia === "Tuesday"){
    echo ("tu dia es Martes");
}else if($dia === "Wednesday"){
    echo ("tu dia es Miercoles");
}else if($dia === "Thursday"){
    echo ("tu dia es Jueves");
}else if($dia === "Friday"){
    echo ("tu dia es Viernes");
}else if($dia === "Saturday"){
    echo ("tu dia es Sabado");
}else if($dia === "Sunday"){
    echo ("Tu dia es Dominego"); 
}else{
echo ("No tienes dia");
}





?>