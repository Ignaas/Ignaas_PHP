<?php

$skola_paimta = (rand(1, 100));
$skola_atiduodama_100_200 = (rand(101, 200));
$skola_atiduodama_200_300 = (rand(201, 300));

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kintamieji - pataisyti - čia užduoties name - NEREDUNDANT</title>
</head>
<body>
    <div>
        <h1>Skolos skaičiuoklė</h1>
        <h2>Jei paėmei <?php print $skola_paimta; ?> eurų.</h2>
        <h3>Su vienu kabančiu grąžinsi <?php print $skola_atiduodama_100_200; ?> eurų.</h3>
        <h3>Su dviem kabančiais grąžinsi <?php print $skola_atiduodama_200_300; ?> eurų.</h3>
    </div>
</body>
</html>