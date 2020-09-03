<!-- GOAL:
Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60


<?php

$basketMatch = [
    [
        "hometeam" => "Olimpia",
        "hometeam_score" => "55",
        "guestteam" => "Lions",
        "guestteam_score" => "46"
    ],

    [
        "hometeam" => "Olimpia",
        "hometeam_score" => "75",
        "guestteam" => "Lions",
        "guestteam_score" => "41"
    ],

    [
        "hometeam" => "Olimpia",
        "hometeam_score" => "50",
        "guestteam" => "Lions",
        "guestteam_score" => "65"
    ]

];

foreach ($basketMatch as $m) {
    echo $m['hometeam'] . ' - ' . $m['guestteam']
        . ' | ' . $m['hometeam_score'] . '-' . $m['guestteam_score']
        . '<br>';
};

?>



// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];



$validName = strlen($name) > 3;
$validMail = strpos($mail, '.') !== false &&
    strpos($mail, '@') !== false;

$validAge = is_numeric($age);

if ($validName && $validMail && $validAge) {
    echo "Accesso Consentito";
} else {
    echo "Accesso Negato";
};

?>

 <!-- Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
// NOTE: come detto gli snacks possono essere svolti in un singolo file, o in file separati, a piacere -->

<?php

$arrNum = [];

while (count($arrNum) < 15) {
    $nRand = rand(1, 15);

    if (!in_array($nRand, $arrNum)) {
        $arrNum[] = $nRand;
    }
}

var_dump($arrNum);

?>