<?php

// Bepaald dat er alleen maar cijfers mogen typen
while (true) {
    $dia = readline("Voer de Diameter in: ");
    if (is_numeric($dia)) {
        break; // zorgt ervoor dat de while loop stopt wanneer de gebruiker een getal invoert

    } else {
        echo "Ongeldig invoer. Alleen cijfers zijn toegestaan.\n";
    }
}

// Berekening van de omtrek en oppervlakte
$pi = pi();
$straal = $dia / 2;
$omtrek = $pi * $dia;
$oppervlakte = $pi * $straal * $straal;

// Rond de omtrek en oppervlakte af tot twee achter de comma
$omtrek = round($omtrek, 2);
$oppervlakte = round($oppervlakte, 2);

// Toont de resultaten
echo "Pi: $pi \n";
echo "Omtrek: $omtrek m\n";
echo "Oppervlakte: $oppervlakte m²\n";

?>