<?php 
function contraseña(){
    $ContraseñaR = "R15"; // Contraseña correcta
    
    if(isset($_POST['Contraseña'])){ // Verificar si se envió la contraseña desde el formulario
        $Contraseña = $_POST['Contraseña']; // Obtener la contraseña ingresada desde el formulario
        
        // Bucle para comparar la contraseña ingresada con la contraseña correcta
        for($i = $Contraseña; $i == $ContraseñaR;) { // Este bucle se ejecuta solo si las contraseñas coinciden
            echo "Contraseña Correcta: $i"; // Mostrar mensaje de contraseña correcta
            break; // Salir del bucle
        }
        // La siguiente parte no es necesaria ya que el bucle anterior maneja la verificación de la contraseña
        // Por lo tanto, puedes eliminar el "else if"

    } else {
        echo "Por favor, ingrese una contraseña."; // Mostrar mensaje si no se ingresó ninguna contraseña
    }
}

contraseña(); // Llamar a la función
?>


