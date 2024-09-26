<?php

// in een while zodat je zelf kan kiezen hoe vaak je de code wilt uitvoeren
while (true) {
  $stop = readline("Wil je kop of munt spelen [Ja/Nee]: ");
  $stop = strtolower($stop); // zet de invoer om naar kleine letters

  //hier wordt de invoer gecontroleerd
  if ($stop != "ja" && $stop != "nee") {
    echo "Fout je mag alleen 'Ja' of 'Nee' typen.\n";
  } elseif ($stop == "nee") {
    exit("Uw wou geen kop of munt spelen.");
  } else { //hier begint de kop of munt pas als alle invoer goed is
    $random = rand(1,2);
    if ($random == 1) {
      echo "Het is Kop!\n"; 
    } elseif ($random == 2) {
      echo "Het is Munt!\n";
    }
  }
}
?>