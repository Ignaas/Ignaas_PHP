<?php $laikas = date('s'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primityvios logikos bomba ir sprogsta</title>
        <style>
            div {
                height: 1<?php print $laikas; ?>px; 
                width: 1<?php print $laikas; ?>px;
            }

            .bomb {
                background-image: url("https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ffiles.gamebanana.com%2Fimg%2Fico%2Fsprays%2F4ea33068c0dcc.png&f=1&nofb=1");
                background-size: cover;

            }

            .bomb00 {
                background-image: url("https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbogku.com%2Fwp-content%2Fuploads%2F2017%2F07%2FCounter-Strike-1.6-Grenade-Explosion.jpg&f=1&nofb=1");
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="bomb bomb<?php print $laikas; ?>"></div>
        <p>
            <?php print $laikas; ?>
        </p>
    </body>
</html>