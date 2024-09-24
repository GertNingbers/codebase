<?php

$random = rand(1,2);
$stop = 0;

while ($stop === "Nee") {

  $stop = readline ("Wil je kop of munt spelen [Ja/Nee]: ");

  if ($random === 1) {
      echo "Het is Kop!\n";
}

  if ($random === 2) {
      echo "Het is Munt!\n";
}
}
?>