<?php

var_dump($_POST);
$clicks_num = 0;

if (isset($_POST['enter'])) {
    $clicks_num = $_POST['enter'];
    $clicks_num++;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method ="post">
            <input type="submit" name="enter" value="<?php print $clicks_num; ?>">
            <?php for ($i = 0; $i < $clicks_num; $i++): ?>
                <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.kQQCJSSCFkfHkYsHmC6imgHaHT%26pid%3DApi&f=1" height="100" width="100"> 
            <?php endfor; ?>
        </form>
    </body>
</html>