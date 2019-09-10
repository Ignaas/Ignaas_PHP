<?php

date_default_timezone_set('Europe/Vilnius');
setlocale(LC_TIME, array('lt_LT.UTF-8', 'lt_LT@euro', 'lt_LT', 'lithuanian'));
$moksluPradzia = strtotime('2019-07-04');

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print 'Aš, ' . strftime('%A') . ' ir PHP'; ?></title>
    </head>
    <body>
        <h1>
            Ignas - HTML <?php print 'ir PHP'; ?> asas jau nuo
            <?php print date('Y', $moksluPradzia) . ' metų' ?>
        </h1>
        <p>
            Viskas prasidėjo <?php print strftime('%m'); ?> <br>
            <?php print ' mėnesio, ' . strftime('%e') . ' dieną!' ?>
        </p>
    </body>
</html>