<?php
function validarNombreUsuario() {
    // Verificar si se ha enviado un valor para "nombre" a través del método POST
    if(isset($_POST['nombre'])) {
        $nombre = $_POST['nombre']; // Obtener el valor del campo "nombre"
        $longitud = strlen($nombre); // Calcular la longitud del nombre

        // Verificar si la longitud del nombre está dentro del rango válido
        if($longitud >= 4 && $longitud <= 25 ) {
            // Verificar si el primer carácter es una letra
            if (ctype_alpha($nombre[0])) {
                // Verificar que el nombre contenga solo letras, números y guiones bajos
                if (preg_match('/^[a-zA-Z0-9_]*$/', $nombre)) {
                    // Verificar que el nombre no termine con un guión bajo
                    if (substr($nombre, -1) != "_") {
                        // Si todas las condiciones se cumplen, el nombre es válido
                        echo "true: " . $nombre;
                    } else {
                        // Mensaje de error si el nombre termina con un guión bajo
                        echo "false: El nombre de usuario no puede terminar con un guión bajo";
                    }
                } else {
                    // Mensaje de error si el nombre contiene caracteres no válidos
                    echo "false: El nombre de usuario solo puede contener letras, números y guiones bajos";
                }
            } else {
                // Mensaje de error si el nombre no comienza con una letra
                echo "false: El nombre de usuario debe comenzar con una letra";
            }
        } else {
            // Mensaje de error si la longitud del nombre no está en el rango válido
            echo "false: El nombre de usuario debe tener entre 4 y 25 caracteres";
        }
    }
}

// Llamar a la función para realizar la validación cuando se envía el formulario
validarNombreUsuario();
?>
