<?php
    // Creare un array contenente qualche alunno di un’ipotetica classe.
    // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    // Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $studenti=[
        [
            "nome" => "Luca",
            "cognome" => "Falaffel",
            "voti" => [5, 6, 7],
            // "media" => media($studenti[0]["voti"])
        ],
        [
            "nome" => "Mario",
            "cognome" => "Idraulico",
            "voti" => [9, 9, 7],
            // "media" => media($studenti[1]["voti"])
        ],
        [
            "nome" => "Luigi",
            "cognome" => "Pure",
            "voti" => [1, 10, 9],
            // "media" => media($studenti[2]["voti"])
        ],
    ];

    function media($arrNumbs){
        $somma=0;
        foreach($arrNumbs as $num){
            $somma += $num;
        };
        return round($somma /= count($arrNumbs), 2);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-7</title>
</head>
<body>
    <ul>
        <?php foreach($studenti as $studente):?>
            <li>
                <h3><?= "{$studente["nome"]} {$studente["cognome"]}" ?></h3>
                <p>la tua media è: <?= media($studente["voti"]) ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>