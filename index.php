<?php

$termometer = [
    [
        'text' => ['Pramiegojau', 'Apsipyliau kava', 'Nėra karšto vandens'],
        'text-css' => 'text_color1',
        'bar-stat' => 'PX',
        'bar-css' => 'color1'
    ],
    [
        'text' => ['Nusideginau ranką', 'Nuleido padangą', 'Pamiršau piniginę'],
        'text-css' => 'text_color2',
        'bar-stat' => 'BL',
        'bar-css' => 'color2',
    ],
    [
        'text' => ['Pavogė pinigines', 'Užsikimšo tūlikas ir užpylė visus namus', 'Katė prišiko virtuvėj ant stalo'],
        'text-css' => 'text_color3',
        'bar-stat' => 'NX',
        'bar-css' => 'color3',
    ],
    [
        'text' => ['Nušovė', 'Pavogė batus ir paliko vidury miesto', 'Pralaimėjom PZ2A projektą'],
        'text-css' => 'text_color4',
        'bar-stat' => 'PZ2A',
        'bar-css' => 'color4',
    ],
];

$rand_numb = rand(0, 3);
$count = count($termometer);
$bar_default = 'color';


$bar_one = $bar_default;
$bar_two = $bar_default;
$bar_three = $bar_default;
$bar_four = $bar_default;

$bar_result_one = '-';
$bar_result_two = '-';
$bar_result_three = '-';
$bar_result_four = '-';

switch ($rand_numb) {
    case 0:
        $bar_one = $termometer[0]['bar-css'];
        $bar_result_one = $termometer[0]['bar-stat'];
        break;

    case 1:
        $bar_one = $termometer[0]['bar-css'];
        $bar_two = $termometer[1]['bar-css'];
        $bar_result_two = $termometer[1]['bar-stat'];
        break;

    case 2:
        $bar_one = $termometer[0]['bar-css'];
        $bar_two = $termometer[1]['bar-css'];
        $bar_three = $termometer[2]['bar-css'];
        $bar_result_three = $termometer[2]['bar-stat'];
        break;

    case 3:
        $bar_one = $termometer[0]['bar-css'];
        $bar_two = $termometer[1]['bar-css'];
        $bar_three = $termometer[2]['bar-css'];
        $bar_four = $termometer[3]['bar-css'];
        $bar_result_four = $termometer[3]['bar-stat'];
        break;

    default:
        break;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body {
                background-image: url("http://www.whoa.in/20140224-Whoa/Despicable-Me-Minions-with-Dark-Background-HD-Wallpaper.png");
            }

            h1 {
                display: block;
                margin: auto;
                width: 400px;
                color: white;
            }

            li {
                list-style: none;
            }

            .konteineris {
                padding-top: 300px;
                display: block;
                width: 400px;
                margin: auto;
                height: 50px;
                margin-bottom: 30px;
            }

            .teksto_container {
                display: block;
                width: 400px;
                margin: auto;
                padding-top: 25px;
                height: 50px;
                margin-bottom: 30px;
            }

            .termometro-burbulas {
                border-radius: 50%;
                background: green;
                height: 50px;
                width: 50px;
                text-align: center;
                display: inline-block;
                margin-bottom: auto;
                margin-top: auto;
                float: left;
            }

            .termometro-staciakampis {
                height: 50px;
                width: 80px;
                border: solid 1px white;
                display: inline-block;
                color: transparent;
                text-align: center;
            }

            .color {
                background-color: grey;
                color: grey;
            }

            .color1 {
                background-color: green;
                color: white;
            }

            .color2 {
                background-color: yellow;
                color: black;
            }

            .color3 {
                background-color: orange;
                color: black;
            }

            .color4 {
                background-color: red;
                color: white;
            }

            .text_color1 {
                color: green;
            }

            .text_color2 {
                color: yellow;
            }

            .text_color3 {
                color: orange;
            }

            .text_color4 {
                color: red;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/index.php">Pimpačkiukai.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/pz2a-mat.php">PZ2A-MAT <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About</a>
                    </li>
                </ul>
                <span class="navbar-text">Money ain't real, time ain't real</span>
            </div>
        </nav>
        <h1>PZDA-MAT</h1>
        <div class="konteineris">
            <div class="termometro-burbulas"></div>
            <div class="termometro-staciakampis <?php print $bar_one; ?>"><?php print $bar_result_one; ?></div>
            <div class="termometro-staciakampis <?php print $bar_two; ?>"><?php print $bar_result_two; ?></div>
            <div class="termometro-staciakampis <?php print $bar_three; ?>"><?php print $bar_result_three; ?></div>
            <div class="termometro-staciakampis <?php print $bar_four; ?>"><?php print $bar_result_four; ?></div>
        </div>
        <div class="teksto_container">
            <li class="text_color1">Dienos pradžia</li>
                <?php for ($i = 0; $i <= $rand_numb; $i++): ?>
                <li class=" <?php print $termometer[$i]['text-css']; ?>"><?php print $termometer[$i]['text'][rand(0, 2)]; ?></li>
            <?php endfor; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>