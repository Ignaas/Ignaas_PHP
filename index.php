<?php
$data = date("Y/m/d h:i:s");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aš valdau HTML ir PHP!</title>
    </head>
    <body>
        <h1>Ignas - HTML ir PHP asas!</h1>
        <p>Kuriu dinaminį turinį. Atidaryta:
            <?php print $data; ?>
        </p>
    </body>
</html>
