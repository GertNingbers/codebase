<?Php

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

for ($teller = $begin; $teller <= $hoeveel; $teller++) {
    $boodschap = readline("welke boodschap wil je toevoegen.\n");
    array_push($lijst, $boodschap);
    var_dump($boodschap);
}

echo var_export($lijst);
echo "\n"
?>