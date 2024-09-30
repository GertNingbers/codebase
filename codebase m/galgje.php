<?php

$lijst = array("appel", "eikenboom", "koffie", "kasteel", "boeken", "kameel", "dolfijn", "orca", "hond", "stad", "voetbal", "geluk", "nederland", "holland", "schip", "zacht", "vocht", "wazig", "glijd", "afzak", "aarde", "cijfer", "engel", "aarde");

while (true) {
    $vraag = readline("Wil je galgje spelen [Ja/Nee]?: ");
    $vraag = strtolower($vraag);

    if (is_numeric($vraag)) {
        echo "Je mag alleen maar letters invoeren!!!\n";
    } elseif ($vraag == "nee") {
        exit("Je wou geen galgje spelen.");
    } elseif ($vraag == "ja") {
        $random = rand(0,23);
        $woord = $lijst [$random];
        echo "$woord\n";
        while (true){
        $letter = readline("Geef een letter: ");
        $letter = strtolower($letter);
        }
    } 
        else {
        echo "Je mag alleen ja of nee typen!!!.\n";
    }    
}
