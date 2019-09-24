<?php

$drinks = [
    [
        'name' => 'Vilkmergės Alus',
        'price_stock' => 3.6,
        'discount' => 0,
        'img' => 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.f4ckrSs1exepApuh3JFvWgAAAA%26pid%3DApi&f=1',
    ],
    [
        'name' => 'Stumbro Degtinėla',
        'price_stock' => 11.79,
        'discount' => 5,
        'img' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.stumbrasvodka.com%2Fwp-content%2Fuploads%2F2017%2F09%2Fmedaus.png&f=1&nofb=1',
    ],
    [
        'name' => 'Švyturio Ekstra',
        'price_stock' => 2.9,
        'discount' => 0,
        'img' => 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fdrizly-products0.imgix.net%2Fci_66565.jpg%3Fauto%3Dformat%252Ccompress%26fm%3Djpg%26q%3D20&f=1&nofb=1',
    ],
    [
        'name' => 'Kalnapilio Radler',
        'price_stock' => 2.5,
        'discount' => 10,
        'img' => 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.pricer.lt%2Fdynamic%2Fforeign.png%3Fimage%3Dhttps%3A%252F%252Fwww.barbora.lt%252Fapi%252FImages%252FGetInventoryImage%253Fid%253Dabf537df-38e7-44c8-ad2f-6a4156b8128d&f=1&nofb=1',
    ],
];

foreach ($drinks as $drink_idx => $drink) {
    $drinks[$drink_idx]['price_retail'] = $drink['price_stock'] * (1 - $drink['discount'] / 100);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .border {
                border: 2px solid black;
                display: inline-block;
                position: relative;
            }
            .drink-name {
                font-size: 1.4rem;
                text-align: center;
                width: 50%;
                margin: auto;
            }
            .drink-price-tag {
                background: #FF9999;
                position: absolute;
                top: 0;
                right: 0;
            }
            .drink-image {
                width: 200px;
                height: 200px;
            } 
        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <?php foreach ($drinks as $drink): ?>
            <div class="border">
                <span class="drink-price-tag">
                    <?php print number_format($drink['price_retail'], 2) . '€'; ?>
                </span>
                <img class="drink-image" src="<?php print $drink['img']; ?>"  />
                <div class="drink-name"><?php print $drink['name']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>