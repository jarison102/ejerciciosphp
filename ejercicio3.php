<?php 
$DineroR = $_POST['DineroR'];

if($DineroR <= 19){
    echo ("Los gastos de envío son 9 euros");
}else if ($DineroR >= 40 && $DineroR <= 40  ){
 echo ("Los Importes son Gratis");
}else if ($DineroR >= 200 ){
 echo ("Tu Codigo de Descuento es CODIGODESC33");
}else {
    echo ("Ingresa tu Valor");
}


?>