<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paket/{id}', function ($id) {
    $pakets = [
        1 => [
            'title' => 'One Day Trip Western + Snorkeling',
        ],
        2 => [
            'title' => 'paket 2',
        ],
        3 => [
            'title' => 'paket 3',
        ],
    ];

    return view('paket', [
        'title' => $pakets[$id]['title'],
    ]);
})->name('paket');