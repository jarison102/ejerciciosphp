<?php 
function caracteres(){
    if($numero = $_POST['carateres']){
        $numero = $_POST['carateres'];
        $numeroComoTexto = (string) $numero;// Convertir el número en una cadena
        $cantidaddigitos = strlen($numeroComoTexto);// Calcular la longitud de la cadena
        echo ("El número ingresado tiene ". $cantidaddigitos . " Digitos");
    }
}

caracteres()

?>