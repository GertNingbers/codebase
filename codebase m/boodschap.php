<?Php

//dit zorgt ervoor dat er een nummer invoer is.
while (true) {
    $hoeveel = readline("Hoeveel boodschappen wil je doen? \n");
    if (is_numeric($hoeveel)) {
        break;
    } else {
        echo "!!!Je moet een cijfer invoeren!!!\n";
    }
}

$begin = 1;
$lijst = array();

//hier wordt de invoer opgeslagen in een array en ook een lijstje gemaakt.
for ($teller = $begin; $teller <= $hoeveel;) {
    $boodschap = readline("welke boodschap wil je toevoegen.\n");
    if (preg_match('/[a-zA-Z]/', $boodschap)) {
        array_push($lijst, " $teller. $boodschap ");
        $teller++;
    } else {
        echo "je mag geen invoer gebruiken die alleen maar cijfers bevatten er moeten letters in!!!\n";
    }
}

echo implode("\n", $lijst);
