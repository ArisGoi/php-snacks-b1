<?php 
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.

    // Olimpia Milano - Cantù | 55-60

    $partite= [
        [
            "date" => "16/10/21",
            "sCasa" => "Warriors",
            "sCasaPunti" => 119,
            "sOspite" => "Trail Blazers",
            "sOspitePunti" => 97
        ],
        [
            "date" => "16/10/21",
            "sCasa" => "Spurs",
            "sCasaPunti" => 126,
            "sOspite" => "Rockets",
            "sOspitePunti" => 98
        ],
        [
            "date" => "16/10/21",
            "sCasa" => "Bulls",
            "sCasaPunti" => 118,
            "sOspite" => "Grizzlies",
            "sOspitePunti" => 105
        ],
        [
            "date" => "16/10/21",
            "sCasa" => "Bucks",
            "sCasaPunti" => 103,
            "sOspite" => "Mavericks",
            "sOspitePunti" => 114
        ],
        [
            "date" => "16/10/21",
            "sCasa" => "Knicks",
            "sCasaPunti" => 115,
            "sOspite" => "Wizards",
            "sOspitePunti" => 113
        ],
        [
            "date" => "16/10/21",
            "sCasa" => "Pacers",
            "sCasaPunti" => 94,
            "sOspite" => "Cavaliers",
            "sOspitePunti" => 110
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Last Matches</title>
</head>
<body>
    <h1>Last 6 NBA Matches</h1>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++) {
            echo "<li><strong>" . $partite[$i]["sCasa"] . " - " . $partite[$i]["sOspite"] . "</strong> | " . $partite[$i]["sCasaPunti"] . " - " . $partite[$i]["sOspitePunti"] . "</li>";
        }?>
    </ul>
</body>
</html>