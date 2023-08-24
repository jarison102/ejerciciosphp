<?php 


function juego(){
    if($jugador1 = $_POST ['Jugador1'] && $jugador2 = $_POST ['Jugador2']){
        $jugador1 = $_POST ['Jugador1'];
        $jugador2 = $_POST ['Jugador2'];
        if($jugador1 === $jugador2){
            echo ("Empate");
        }else if($jugador1 == "✂"){
            //echo("Sacaste tijeras " . $jugador1);
        }else if ($jugador2 == "🗿"){
            //echo("Sacaste Piedra " . $jugador1);
        }else if ($jugador2 == "📄"){
            //echo("Sacaste Papel " . $jugador2);
        }
        else if ($jugador2 == "✂"){
            //echo("Sacaste tijeras " . $jugador2);
        }else if ($jugador1 == "📄"){
            //echo("Sacaste Papel " . $jugador1);
        }else if ($jugador1 == "🗿"){
            //echo("Sacaste Piedra " . $jugador1);
        }if($jugador1 === "🗿" && $jugador2 === "✂"){
            echo ("El jugador 1 Gano Sacaste ". $jugador1 . "El jugador 2 saco " . $jugador2 . "<br>" . "GANO EL JUGADOR 1 " . $jugador1);
        }else if ($jugador1 === "📄" && $jugador2 === "🗿"){
            echo ("Jugador 1 gano " .  $jugador1 . " El jugador 2 saco " . $jugador2);
        }
    }
}

juego()


?>