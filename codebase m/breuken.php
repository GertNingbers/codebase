<?php

// hier wordt invoer gechecked.
while(true){
    $nummer1 = readline("Geef het DEELTAL hier: ");
    $nummer2 = readline ("En hier de DELER: ");
    if (is_numeric($nummer1) &&  is_numeric($nummer2)){
      break;
    }
    else {
        echo "Je moet nummers invoeren.\n";
    }
}

$som = $nummer1 /  $nummer2;
$som = round($som, 2);

echo "Deeltal : $nummer1\nDeler : $nummer2\nAntwoord: $som" ;

?>