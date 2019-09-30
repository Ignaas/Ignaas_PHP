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
        </form>
    </body>
</html>