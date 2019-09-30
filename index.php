<?php

function square($x) {
    return $x ** 2;
}

$kvadratas = 0;

if (isset($_POST['name'])) {
    $kvadratas = square($_POST['name']);
}

$h1_text = "Atsakymas: $kvadratas";

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="index.php" method="POST">
            Ką pakelti kvadratu: <input type="number" name="name">
            <input type="submit">
        </form>
        <h1><?php isset($h1_text) ? print $h1_text : print 'Nėra submit'; ?></h1>
    </body>
</html>