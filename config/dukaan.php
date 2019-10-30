<?php

return [
    'max_categories' => env('MAIN_CATEGORIES', 5),
    'delivery_cost' => 50,
    'order_status' => ['pending', 'accepted'],
    'pages' => [
        'about-us' => 'About us',
        'delivery-info' => 'Delivery info',
        'privacy' => 'Privacy',
        'terms-and-conditions' => 'Terms and Conditions',
    ],
];
