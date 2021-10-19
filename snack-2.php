<?php 
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <form action="">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">

        <label for="mail">eMail:</label>
        <input type="text" name="mail" id="mail">

        <label for="age">Età:</label>
        <input type="text" name="age" id="age">

        <button>INVIA</button>
    </form>
</body>
</html>