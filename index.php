<?php

$orai = rand(0, 1);

if ($orai) {
    $css_orai = 'sauleta';
    $text_value = 'Saulėta';
} else {
    $css_orai = 'debesuota';
    $text_value = 'Debesuota';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #5</title>
        <style>
            .orai_box {
                height: 128px;
                width: 128px;
            }

            .sauleta {
                float: left;
                background-image: url(https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffiles.softicons.com%2Fdownload%2Ftoolbar-icons%2Fvista-weather-icons-by-icons-land%2Fpng%2F128x128%2FSunny.png&f=1&nofb=1);
            }

            .debesuota {
                float: left;
                background-image: url(https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fthegazette.com.au%2Fwp-content%2Fuploads%2Fweather_icons%2Fmostlycloudy.png&f=1&nofb=1);
            }

            .text {
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="orai_box <?php print $css_orai; ?>"></div>
        <div class="text"><?php print $text_value; ?></div>
    </body>
</html>