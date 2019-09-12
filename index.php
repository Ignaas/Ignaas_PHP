<?php

$skola_paimta = (rand(1, 100));
$skola_atiduodama_extra100 = (rand(101, 200));
$skola_atiduodama_extra200 = (rand(201, 300));
$skola_atiduodama_extra300 = (rand(301, 400));

?>
<head>
    <meta charset="UTF-8">
    <title>Kintamieji - pataisyti</title>
</head>
<body>
    <div class="body-custom">
        <h1>Skolos skaičiuoklė</h1>
        <h2>Jei paėmei <?php print $skola_paimta; ?> eurų.</h2>
        <h3>Su vienu kabančiu grąžinsi <?php print $skola_atiduodama_extra100; ?> eurų.</h3>
        <h3>Su dviem kabančiais grąžinsi <?php print $skola_atiduodama_extra200; ?> eurų.</h3>
        <h3>Su trimis kabančiais grąžinsi <?php print $skola_atiduodama_extra300; ?> eurų.</h3>
    </div>
</body>
</html>