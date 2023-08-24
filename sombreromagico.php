<?php 

function sombreromagico(){
    $solucion1 =['Toma bebidas calientes','Toma Reposo','Toma pastas para el dolor como el XRAY','Toma agua de panela' , 'No te expongas al frio'];
    $solucion2 =['Descanso: El descanso adecuado es esencial para permitir que tu cuerpo se recupere.','Hidratación: Bebe líquidos como agua, tés de hierbas o caldo para mantener tu cuerpo hidratado y ayudar a aliviar la congestión.','Gárgaras de agua salada: Hacer gárgaras con agua tibia y sal puede ayudar a aliviar el dolor de garganta.','Suplementos de vitamina C: Algunas personas encuentran beneficios al tomar suplementos de vitamina C, pero es importante no exagerar y seguir las dosis recomendadas.'];
    if($problemas = $_POST ['problema']){
        $problemas = $_POST ['problema'];
    }if($problemas === "Tengo gripa"){
        foreach($solucion1 as $soluciones){
            echo ($soluciones . "<br>");
        }
    }else if($problemas === "Tengo migraña"){
        foreach($solucion2 as $solucionM){
            echo ($solucionM . "<br>");
        }
    }
}
sombreromagico()




?>