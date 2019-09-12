<?php
$produktai = [
    [
        'name' => 'Pienas',
        'weight' => 400,
        'price' => 90,
        'img_link' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fpienozvaigzdes.lt%2F194-large_default%2Fdvaro-pienas-25-riebumo-1l.jpg&f=1&nofb=1'
    ],
    [
        'name' => 'Kiauliena',
        'weight' => 1200,
        'price' => 329,
        'img_link' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F4.bp.blogspot.com%2F_UrEcgyw4NK0%2FTIP8gbAfHRI%2FAAAAAAAAARY%2FvNsAQZ8-jfs%2Fs1600%2Fpork.png&f=1&nofb=1'
    ],
    [
        'name' => 'Himalajų druska',
        'weight' => 2000,
        'price' => 99,
        'img_link' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F1754%2F3821%2Fproducts%2Fpink-himalayan-salt-small-grain-carrier-bowl_-_864x864_1200x1200.png%3Fv%3D1522211384&f=1&nofb=1'
    ],
    [
        'name' => 'Ledai',
        'weight' => 50,
        'price' => 79,
        'img_link' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.pngpix.com%2Fwp-content%2Fuploads%2F2016%2F08%2FPNGPIX-COM-Ice-Cream-Cone-PNG-Transparent-Image-500x988.png&f=1&nofb=1'
    ]
];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prekiu katalogas</title>
        <style>
            .container {
                display: inline-block;
                border: 5px solid black;
                border-radius: 2%;
            }

            .product  {
                display: inline-block;
                margin: 2rem;
            }

            .product-name {
                text-align: center;
            }

            .weight {
                color: red;
                text-align: center;
            }

            .price {
                color: green;
                text-align: center;
            }

            img {
                position: relative;
                height: 7em;
                width: 8em;
                margin: 0 auto;
                display: block;

            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php foreach ($produktai as $produktas): ?>
                <div class="product">
                    <h1 class="product-name"><?php print $produktas['name']; ?></h1>
                    <div class="weight"><?php print $produktas['weight']; ?> gramai</div>
                    <div class="price"><?php print $produktas['price']; ?> centai</div>
                    <img src="<?php print $produktas['img_link']; ?>"/>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>