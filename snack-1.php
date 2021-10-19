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
    <title>NBA Lasts Match</title>
</head>
<body>
    <h1>NBA 6 Lasts Match</h1>
    <ul>
        <li><strong><?php echo $partite[0]["sCasa"] . " - " . $partite[0]["sOspite"]?></strong> | <?php echo $partite[0]["sCasaPunti"] . " - " . $partite[0]["sOspitePunti"]?></li>

        <li><strong><?php echo $partite[1]["sCasa"] . " - " . $partite[1]["sOspite"]?></strong> | <?php echo $partite[1]["sCasaPunti"] . " - " . $partite[1]["sOspitePunti"]?></li>

        <li><strong><?php echo $partite[2]["sCasa"] . " - " . $partite[2]["sOspite"]?></strong> | <?php echo $partite[2]["sCasaPunti"] . " - " . $partite[2]["sOspitePunti"]?></li>

        <li><strong><?php echo $partite[3]["sCasa"] . " - " . $partite[3]["sOspite"]?></strong> | <?php echo $partite[3]["sCasaPunti"] . " - " . $partite[3]["sOspitePunti"]?></li>

        <li><strong><?php echo $partite[4]["sCasa"] . " - " . $partite[4]["sOspite"]?></strong> | <?php echo $partite[4]["sCasaPunti"] . " - " . $partite[4]["sOspitePunti"]?></li>

        <li><strong><?php echo $partite[5]["sCasa"] . " - " . $partite[5]["sOspite"]?></strong> | <?php echo $partite[5]["sCasaPunti"] . " - " . $partite[5]["sOspitePunti"]?></li>
    </ul>
</body>
</html>