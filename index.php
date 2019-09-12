<?php

$paimta_skola = (rand(1, 100));
$atiduodama_skola_pirma = (rand(101, 200));
$atiduodama_skola_antra = (rand(201, 300));
$atiduodama_skola_trecia = (rand(301, 400));

?>
<head>
    <meta charset="UTF-8">
    <title>Kintamieji - pataisyti</title>
</head>
<body>
    <div class="body-custom">
        <h1>Skolos skaičiuoklė</h1>
        <h2>Jei paėmei <?php print $paimta_skola; ?> eurų</h2>
        <h3>Su vienu kabančiu grąžinsi <?php print $atiduodama_skola_pirma; ?> eurų.</h3>
        <h3>Su dviem kabančiais grąžinsi <?php print $atiduodama_skola_antra; ?> eurų.</h3>
        <h3>Su trimis kabančiais grąžinsi <?php print $atiduodama_skola_trecia; ?> eurų.</h3>
    </div>
</body>
</html>