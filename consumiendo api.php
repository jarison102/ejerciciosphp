<!-- Incluye la hoja de estilo de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
// Define una función llamada "api"
function api(){
    // Define la URL de la API para obtener una lista de Pokémon
    $API_URL = 'https://pokeapi.co/api/v2/pokemon?limit=1000';

    // Inicia una solicitud GET a la API utilizando cURL
    $ch = curl_init($API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Configura cURL para devolver la respuesta como una cadena
    $response = curl_exec($ch); // Realiza la solicitud y almacena la respuesta en $response
    curl_close($ch); // Cierra la conexión cURL

    // Decodifica la respuesta JSON en un array asociativo
    $pokemonList = json_decode($response, true);

    // Muestra los nombres e imágenes de los Pokémon en tarjetas
    foreach ($pokemonList['results'] as $pokemon) {
        $pokemonUrl = $pokemon['url'];
        $pokemonData = json_decode(file_get_contents($pokemonUrl), true); // Obtiene más detalles del Pokémon
        
        $pokemonName = ucfirst($pokemonData['name']); // Capitaliza el nombre del Pokémon
        $pokemonImage = $pokemonData['sprites']['front_default']; // Obtiene la URL de la imagen del Pokémon
        
        // Imprime una tarjeta de Bootstrap para cada Pokémon
        echo '<div class="card" style="width: 18rem; display: inline-block; margin: 10px;">';
        echo '<img src="' . $pokemonImage . '" class="card-img-top" alt="' . $pokemonName . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $pokemonName . '</h5>';
        echo '</div>';
        echo '</div>';
    }
}

// Llama a la función "api" para obtener y mostrar los Pokémon
api();
?>

<!-- Incluye la biblioteca de JavaScript de Bootstrap (jQuery y Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
