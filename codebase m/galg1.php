<?php

$lijst = array("appel", "eikenboom", "koffie", "kasteel", "boeken", "kameel", "dolfijn", "orca", "hond", "stad", "voetbal", "geluk", "nederland", "holland", "schip", "zacht", "vocht", "wazig", "glijd", "afzak", "aarde", "cijfer", "engel", "aarde", "topper");
$aantal = count($lijst);
$som = $aantal - 1;

while (true) {
    $vraag = readline("Wil je galgje spelen [Ja/Nee]?: ");
    $vraag = strtolower($vraag);

    if (is_numeric($vraag)) {
        echo "Je mag alleen maar letters invoeren!!!\n";
    } elseif ($vraag == "nee") {
        exit("Je wou geen galgje spelen.");
    } elseif ($vraag == "ja") {
        $random = rand(0, $som);
        $woord = $lijst[$random];
        $woordLengte = strlen($woord);
        $geradenLetters = array_fill(0, $woordLengte, "_");
        $fouten = 0;
        $maxFouten = 8;
        $beurten = 0;

        while (true) {
            echo implode(" ", $geradenLetters) . "\n";
            $letter = readline("Geef een letter: ");
            $letter = strtolower($letter);
            $beurten++;

            if (strlen($letter) != 1) {
                echo "Je mag alleen één letter invoeren!!!\n";
            } elseif (strpos($woord, $letter) !== false) {
                for ($i = 0; $i < $woordLengte; $i++) {
                    if ($woord[$i] == $letter) {
                        $geradenLetters[$i] = $letter;
                    }
                }
                if (!in_array("_", $geradenLetters)) {
                    echo "Je hebt het woord geraden! Het was: $woord\n";
                    echo "je hebt er $beurten beurten over gedaan. \n";
                    break;
                }
            }
            if (is_numeric($letter)) {
                echo "Je mag alleen maar letters invoeren!!!\n";            
            } else {
                $fouten++;
                echo "Fout! Je hebt nog $maxFouten - $fouten pogingen over.\n";
                if ($fouten >= $maxFouten) {
                    echo "Je hebt verloren! Het woord was: $woord\n";
                    echo "je hebt er $beurten beurten over gedaan. \n";
                    break;
                }
            }
        }
    } else {
        echo "Je mag alleen ja of nee typen!!!.\n";
    }
}
?>