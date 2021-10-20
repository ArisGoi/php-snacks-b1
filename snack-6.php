<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>

    <style>
        .box-teach{background-color: gray;}
        .box-pm{background-color: green;}
    </style>
</head>
<body>
    <div class="box-teach">
        <?php
            foreach($db["teachers"] as $key => $teacher){
                echo $teacher["name"].$teacher["lastname"]."<br>";
            }
        ?>
    </div>
    <div class="box-pm">
        <?php
            foreach($db["pm"] as $key => $pm){
                echo $pm["name"].$pm["lastname"]."<br>";
            }
        ?>
    </div>
</body>
</html>