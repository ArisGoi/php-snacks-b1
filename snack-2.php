
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

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
        <input type="number" name="age" id="age">

        <button>INVIA</button>
    </form>

    <?php
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if(strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)){
            echo "<h2>Accesso Riuscito</h2>";
        } elseif ($name == null && $mail == null && $age == null) {
            echo "<p>Inserisci i dati di accesso qui sopra</p>";
        } else {
            echo "<h2>Accesso Negato</h2>";
        }
    ?>

</body>
</html>