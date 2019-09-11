<?php

date_default_timezone_set('Europe/Vilnius');
setlocale(LC_TIME, array('lt_LT.UTF-8', 'lt_LT@euro', 'lt_LT', 'lithuanian'));
$moksluPradzia = strtotime('2019-07-04');

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+ 1 day')); ?>!!</title>
    </head>
    <body>
        <h1>
            Ignas - PHP su manim buvo ir
            <?php print date('H', strtotime('- 1 hour')) . ' valandą!'; ?> 
        </h1>
        <p>
            <?php print date('Y', strtotime('+1 Year')) ?>
            ne už kalnų!
        </p>
    </body>
</html>