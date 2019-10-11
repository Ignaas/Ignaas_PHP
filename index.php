<?php

if (!isset($_COOKIE['user_id'])) {
    setcookie('user_id', rand(100000, 999999), time() + 3600, '/');
}

setcookie('count', isset($_COOKIE['count']) ? ++$_COOKIE['count'] : $_COOKIE['count'] = 1, time() + 3600, '/');

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if (isset($_COOKIE['user_id'])): ?>
            <h1>User id: <?php print $_COOKIE['user_id'] ?? ''; ?></h1>
        <?php endif; ?>
        <h2>Apsilankymų skaičius: <?php print $_COOKIE['count'] ?? ''; ?></h2>
    </body>
</html>