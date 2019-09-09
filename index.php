<?php

$data_laikas = date("Y/m/d h:i:s");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aš valdau HTML <?php print 'ir PHP!'; ?></title>
    </head>
    <body>
        <h1>Ignas - HTML <?php print 'ir PHP'; ?> asas!</h1>
        <p>Kuriu dinaminį turinį. <br>
            Atidaryta: <?php print $data_laikas; ?>
        </p>
    </body>
</html>
