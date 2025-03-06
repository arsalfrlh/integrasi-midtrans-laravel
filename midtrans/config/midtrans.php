<?php

return [
    'merchant_id'    => env('MIDTRANS_MERCHANT_ID'),
    'client_key'     => env('MIDTRANS_CLIENT_KEY'),
    'server_key'     => env('MIDTRANS_SERVER_KEY'), //menyimpan data server key midtrans dari file ".env" kedalam array key "server_key"
    'is_production'  => false, // true jika ingin menggunakan mode produksi
    'is_sanitized'   => true,
    'is_3ds'         => true,
];
