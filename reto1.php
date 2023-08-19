<?php 

$numeros = ['1','7','2','5','6','4','3','8','9','10'];
//La función rsort() ordenará el array en orden descendente y luego el bucle foreach imprimirá cada número en ese orden.
//sort ordenará el array en orden acendente
sort($numeros);
//En este código, utilizamos un bucle foreach para recorrer cada elemento del array $numeros y luego utilizamos echo para imprimir cada número

foreach($numeros as $numero){
    echo $numero . ' ';
}
$ruta = "imagenes/63825133177395.png"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hola mundo" ?></h1>
    <img src="<?php echo $ruta ?>">
</body>
</html>