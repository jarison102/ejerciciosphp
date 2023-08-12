<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = $_POST['palabra'];
    
    // Eliminamos los posibles espacios en blanco y convertimos la palabra a minúsculas
    $palabra = strtolower(str_replace(' ', '', $palabra));
    
    // Revertimos la palabra utilizando strrev
    $palabraRevertida = strrev($palabra);
    
    // Verificamos si la palabra original y la palabra revertida son iguales
    if ($palabra == $palabraRevertida) {
        echo "La palabra '$palabra' es un palíndromo.";
    } else {
        echo "La palabra '$palabra' no es un palíndromo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <form action="" method="post">
        <label for="palabra">Ingrese una palabra:</label>
        <input type="text" name="palabra" id="palabra">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
