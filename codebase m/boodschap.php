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
for ($teller = $begin; $teller <= $hoeveel; $teller++) {
    $boodschap = readline("welke boodschap wil je toevoegen.\n");
    array_push($lijst, $boodschap);
        $string=implode("\n",$lijst);
}

echo $string;

?>