<?php

// Bepaald dat er alleen maar cijfers mogen typen
while (true) {
    $dia = readline("Voer de Diameter in: ");
    if (is_numeric($dia)) {
        break; // exit the loop if the input is a number
    } else {
        echo "Ongeldig invoer. Alleen cijfers zijn toegestaan.\n";
    }
}

// Berekening van de omtrek en oppervlakte
$pi = 3.1415926535898;
$macht2 = $dia * $dia;
$omtrek = $pi * $dia;
$oppervlakte = $pi * 2 * $macht2;

// Rond de omtrek en oppervlakte af tot twee achter de comma
$omtrek = round($omtrek, 2);
$oppervlakte = round($oppervlakte, 2);

// Toont de resultaten
echo "Pi: $pi \n";
echo "Omtrek: $omtrek m\n";
echo "Oppervlakte: $oppervlakte m²\n";

?>