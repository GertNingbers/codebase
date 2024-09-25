<?php

while (true) {
    $gooi =  readline("wil je een dobbelsteen gooien [Ja/Nee]");
    $gooi = strtolower($gooi); //zet alle letters om naar kleine letters
    
    if ($gooi != "nee" && $gooi !="ja") {// controle op juiste invoer
        echo "Je mag alleen Gooi of Nee typen\n";
    } elseif ($gooi == "nee") {
      exit ("Gestopt omdat je niet wou dobbellen.");
    } else {
    $random = rand(1,6);
    echo "Je hebt $random gedobbeld.\n";
    }
}
?>