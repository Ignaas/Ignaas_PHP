<?php $laikas = date('s'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primityvios logikos bomba</title>
        <style>
            img {
                height: 1<?php print $laikas;?>px; 
                width: 1<?php print $laikas;?>px;
            }
        </style>
    </head>
    <body>
        <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ffiles.gamebanana.com%2Fimg%2Fico%2Fsprays%2F4ea33068c0dcc.png&f=1&nofb=1"/>
        <p>
            <?php print $laikas; ?>
        </p>
    </body>
</html>