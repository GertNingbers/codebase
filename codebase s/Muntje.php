<?php

$stop = "";

while ($stop != "nee") {
  $stop = readline("Wil je kop of munt spelen [Ja/Nee]: ");
  $stop = strtolower($stop); // zet de invoer om naar kleine letters

  if ($stop != "ja" && $stop != "nee") {
    echo "Fout je mag alleen 'Ja' of 'Nee' typen.\n";
    $stop = ""; // $stop wordt hier gereset zodat hij weer kan loopen
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