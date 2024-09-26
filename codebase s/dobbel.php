<?php

// in een while zodat je zelf kan kiezen hoe vaak je de code wilt uitvoeren
while (true) {
    $gooi =  readline("wil je een dobbelsteen gooien [Ja/Nee]");
    $gooi = strtolower($gooi); //zet alle letters om naar kleine letters

    // controle op de juiste invoer
    if ($gooi == "ja") {
        $random = rand(1, 6);
        echo "Je hebt nummer $random gedobbeld.\n";
    } elseif ($gooi == "nee") {
        exit("Gestopt omdat je niet wou dobbellen.");
    }    
    else {
        echo "Je mag alleen Ja of Nee typen\n";
    }
}
?>