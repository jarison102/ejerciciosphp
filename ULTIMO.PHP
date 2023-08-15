<?php 
function salir(){
    $salirr = "Salir";
    
    if(isset($_POST['Escribe'])){ // Verificar si se envió el texto desde el formulario
        $Escribe = $_POST['Escribe'];
        
        for($i = $Escribe; $i == $Escribe; $i++){
            if ($Escribe === $salirr) {
                echo "Bay"; // Mostrar "Bay" si el usuario escribió "Salir"
                break; // Salir del bucle si se ingresó "Salir"
            } else {
                echo $i  . "<br>"; // Mostrar el texto ingresado
                echo $i . " Eco " . "<br>";
                break; // Salir del bucle después de mostrar el mensaje "Eco"
            }
        }
    }
}

salir();
?>





