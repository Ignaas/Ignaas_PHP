<html>
    <head>
        <meta charset="UTF-8">
        <title>
            PHP lydės ir
            <?php print date('Y-m-d', strtotime('+ ' . rand(1, 21349213481) . ' minutes')); ?>!
        </title>
    </head>
    <body>
        <h1>Ignas - Galbūt turėsiu <?php print rand(1, 5); ?> vaikų (us)!</h1>
        <p>
            D. Trump'as nebebus prezidentu:<br>
            <?php print date('Y-m-d', strtotime('+ ' . rand(2, 10) . ' year')); ?>
        </p>
    </body>
</html>