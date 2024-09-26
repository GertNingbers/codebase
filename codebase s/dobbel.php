<?php

// in een while zodat je zelf kan kiezen hoe vaak je de code wilt uitvoeren
while (true) {
    $gooi =  readline("wil je een dobbelsteen gooien [Ja/Nee]");
    $gooi = strtolower($gooi); //zet alle letters om naar kleine letters
    
    // controle op juiste invoer
    if ($gooi != "nee" && $gooi !="ja") {
        echo "Je mag alleen Ja of Nee typen\n";
    } elseif ($gooi == "nee") {
      exit ("Gestopt omdat je niet wou dobbellen.");
    } 
     //hier wordt de dobbelsteen gegooid
      else {
     $random = rand(1,6);
     echo "Je hebt nummer $random gedobbeld.\n";
    }
}
?>