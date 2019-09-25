<?php

function slot_run($size) {
    $array = [];

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

$slots_machine = slot_run(rand(2, 4));

?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            span {
                display: inline-block;
                height: 50px;
                width: 50px;
            }
            .slots-col-win {
                background: #ffc000;
                border: 1px solid black;
            }
            .slots-col-loss {
                background: #00a3da;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php foreach ($slots_machine as $row_slots): ?>
            <div>
                <?php foreach ($row_slots as $col_slots): ?>
                    <span class="slots-col-<?php print $col_slots ? 'win' : 'loss'; ?>"></span>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>
