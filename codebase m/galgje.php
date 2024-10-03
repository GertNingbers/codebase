<?php

$woorden = ["appel", "eikenboom", "koffie", "kasteel", "boeken", "kameel", "dolfijn", "orca", "hond", "stad", "voetbal", "geluk", "nederland", "holland", "schip", "zacht", "vocht", "wazig", "glijd", "afzak", "aarde", "cijfer", "engel", "aarde", "topper", "galgje"];

while (true) {
    $vraag = readline("Wil je galgje spelen [Ja/Nee]?: ");
    $vraag = strtolower($vraag);

    //invoer wordt gechecked en of het door mag.
    if ($vraag !== "ja" && $vraag !== "nee") {
        echo "Je mag alleen ja of nee typen!!!.\n";
        continue;
    }

    if ($vraag === "nee") {
        exit("Je wou geen galgje spelen.");
    }

    //de woord wordt hier random gemaakt en dat wordt weer naar een cijfer gemaakt.
    $woord = $woorden[array_rand($woorden)];
    $woordLengte = strlen($woord);
    $geradenLetters = array_fill(0, $woordLengte, "_");
    $fouten = 0;
    $maxFouten = 8;
    $beurten = 0;

    //de implode laat de staat van de gegokkte letters zien.
    while (true) {
        echo implode(" ", $geradenLetters) . "\n";
        $letter = readline("Geef een letter: ");
        $letter = strtolower($letter);
        $beurten++;

        if (!ctype_alpha($letter) || strlen($letter) !== 1) {
            echo "Je mag alleen één letter invoeren!!!\n";
            continue;
        }

        //hier wordt gechecked of de letter in het woord zit en waar die zit.
        if (strpos($woord, $letter) !== false) {
            for ($i = 0; $i < $woordLengte; $i++) {
                if ($woord[$i] === $letter) {
                    $geradenLetters[$i] = $letter;
                }
            }
            if (!in_array("_", $geradenLetters)) {
                echo "Je hebt het woord geraden! Het was: $woord\n";
                echo "Je hebt er $beurten beurten over gedaan.\n";
                break;
            }
        } else {
            $fouten++;
            echo "Fout! Je hebt nog $maxFouten - $fouten pogingen over.\n";
            if ($fouten >= $maxFouten) {
                echo "Je hebt verloren! Het woord was: $woord\n";
                echo "Je hebt er $beurten beurten over gedaan.\n";
                break;
            }
        }
    }
}
