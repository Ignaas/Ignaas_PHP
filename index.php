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
        'img' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fres.cloudinary.com%2Fratebeer%2Fimage%2Fupload%2Fw_250%2Cc_limit%2Fbeer_349196.jpg&f=1&nofb=1',
    ],
];

foreach ($drinks as $drink_idx => $drink) {
    $drinks[$drink_idx]['price_retail'] = $drink['price_stock'] * (1 - $drink['discount'] / 100);
}

var_dump($drinks);

?>
