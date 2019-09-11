<html>
    <head>
        <meta charset="UTF-8">
        <title>
            PHP lydės ir
            <?php print date('Y-m-d', strtotime('+ ' . rand(1, 21349213481) . ' seconds')); ?>!
        </title>
        <style>
            body {background: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>); }
            h1 {font-size: <?php print rand(0, 30); ?>; }
            p {color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>); }
        </style>
    </head>
    <body>
        <h1>Ignas - Galbūt turėsiu <?php print rand(1, 5); ?> vaikų (us)!</h1>
        <p>
            D. Trump'as nebebus prezidentu:<br>
            <?php print date('Y-m-d', strtotime('+ ' . rand(2, 10) . ' year')); ?>
        </p>
    </body>
</html>