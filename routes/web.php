<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/airport', function () {
    return view('airport');
});

Route::get('/carcharter', function () {
    return view('car');
});

Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::get('/list', function () {
    return view('list');
});

function getPaketData($slug) {
    $pakets = [
        'one-day-trip-western' => [
            'title' => 'One Day Trip Western + Snorkeling',
            'harga' => '800.000',
            'deskripsi' => 'Experience an unforgettable adventure with the One Day Trip Western + Snorkeling PACKAGE (A) from Wisata Bali Penida. Begin your journey from the hotel at 6:00 in the morning and conclude it at 6:00 in the evening with flexibility according to your request. Snorkeling spots include Manta Bay, Gamat Bay, and Crystal Bay, while land destinations include Angel’s Billabong, Broken Beach, and Kelingking Beach (Secret Point). With a price of IDR 1,250,000 per person, immerse yourself in the beauty of the underwater world and the natural charm of West Bali in one impressive adventure package. Don`t miss this opportunity to experience an unforgettable adventure in West Bali. Book now and create unforgettable memories!',
            'link' => '/paket/one-day-trip-western',
            'destinasi' => [
                'Angel’s Billabong',
                'Broken beach',
                'Kelingking Beach (Secret point)',
            ],
            'spot' => [
                'Manta Bay',
                'Gamat Bay',
                'Crystal Bay',
            ],
            'fasilitas' => [
                'Return Fastboat ( Go and Return )',
                'Mineral water on Arrival',
                'Lunch ( Indonesian food)',
                'Private Car for the Tour',
                'Entrances ticket',
                'Parking fee',
                'Retribution to Goverment',
                'Snorkeling activity and equipment (for package A)',
            ],
            'image_url' => 'https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/Tour-Nusa-Penida-wisata-paluang-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg',
            'badge' => 'Populer',
            'img1' => '/paket1/snorkling.jpg',
            'img2' => '/paket1/angel.jpg',
            'img3' => '/paket1/broken.jpg',
            'img4' => '/paket1/kelingking.jpg',
        ],
        'One-Day-Tour-west-Nusa-Penida' => [
            'title' => 'One Day Tour west Nusa Penida',
            'harga' => '650.000',
            'deskripsi' => 'Welcome to the West Nusa Penida Tour Package! Explore the breathtaking natural beauty of the western side of Nusa Penida Island with our tour package that offers unforgettable experiences. Enjoy towering cliff landscapes, white sandy beaches, and mesmerizing waterfalls. With our expert local guides, you will be taken to explore popular destinations such as Angel’s Billabong, Broken Beach, Kelingking Beach, and Crystal Bay. With a variety of package options tailored to your needs, let’s join us and create everlasting memories in West Nusa Penida!',
            'link' => '',
            'destinasi' => [
                'Angel’s Billabong',
                'Broken beach',
                'Kelingking Beach ',
                'Crystal Bay',
                'Peluang Cliff',
            ],
            'spot' => [],
            'fasilitas' => [
                'Return Fastboat ( Go and Return )',
                'Mineral water on Arrival',
                'Lunch ( Indonesian food)',
                'Private Car for Tours',
                'Entrances ticket ',
                'Parking fee',
                'Retribution to Goverment',
            ],
            'image_url' => 'https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/Tour-Nusa-Penida-wisata-paluang-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg',
            'badge' => 'Populer',
            'img1' => '/paket2/angel.jpg',
            'img2' => '/paket2/broken.jpg',
            'img3' => '/paket2/kelingking.jpg',
            'img4' => '/paket2/peluang.jpg',
        ],
        'One-Day-East-Tour-Nusa-Penida' => [
            'title' => 'One Day East Tour Nusa Penida',
            'harga' => '750.000',
            'deskripsi' => 'Discover the Hidden Gems of East Nusa Penida with Our Tour Package! Embark on an unforgettable journey to the eastern side of Nusa Penida Island, where pristine beaches, rugged cliffs, and stunning viewpoints await. Our expert guides will lead you to explore iconic attractions such as Atuh Beach, Diamond Beach, Thousand Islands Viewpoint, and Teletubbies Hill. Immerse yourself in the natural beauty of Nusa Penida as you snorkel in crystal-clear waters and marvel at the untouched landscapes. Choose from our range of tailored tour packages and let us take you on an adventure of a lifetime in East Nusa Penida!',
            'link' => '',
            'destinasi' => [
                'Diamond Beach',
                'Atuh Beach',
                'Tree House',
                'Thousand Island View Point',
            ],
            'spot' => [],
            'fasilitas' => [
                'Return Fastboat ( Go and Return )',
                'Mineral water on Arrival',
                'Lunch ( Indonesian food)',
                'Private Car for Tours',
                'Entrances ticket ',
                'Parking fee',
                'Retribution to Goverment',
            ],
            'image_url' => 'https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/Tour-Nusa-Penida-wisata-paluang-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg',
            'badge' => 'Populer',
            'img1' => '/paket3/diamond.jpg',
            'img2' => '/paket3/house.jpg',
            'img3' => '/paket3/atuh2.jpg',
            'img4' => '/paket3/atuh1.jpg',
        ],
        'Combination-Nusa-Penida-Tour' => [
            'title' => 'Combination (West and east Side)',
            'harga' => '750.000',
            'deskripsi' => 'Experience the Best of Both Worlds with Our Nusa Penida East and West Combination Tour Package! Immerse yourself in the diverse landscapes and natural wonders of Nusa Penida Island with this comprehensive tour package. Explore the rugged cliffs and pristine beaches of the island`s eastern side, visiting iconic attractions such as Atuh Beach, Diamond Beach, Thousand Islands Viewpoint, and Teletubbies Hill. Then, venture to the western side of Nusa Penida to discover towering cliffs, stunning waterfalls, and picturesque beaches including Angel`ss Billabong, Broken Beach, Kelingking Beach, and Crystal Bay. Our knowledgeable guides will ensure you make the most of your time on the island, providing insights into its rich culture and history along the way. With seamless transportation, guided tours, and unforgettable experiences included, this combination tour package offers the ultimate Nusa Penida adventure!',
            'link' => '',
            'destinasi' => [
                'Tree House',
                'Diamond Beach',
                'Thousand Island',
                'Kelingking Beach',
                'Angel’s Billabong',
                'Broken Beach',
            ],
            'spot' => [],
            'fasilitas' => [
                'Return Fastboat ( Go and Return )',
                'Mineral water on Arrival',
                'Lunch ( Indonesian food)',
                'Private Car for Tours',
                'Entrances ticket',
                'Parking fee',
                'Retribution to Goverment',
            ],
            'image_url' => 'https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/Tour-Nusa-Penida-wisata-paluang-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg',
            'badge' => 'Populer',
            'img1' => '/paket2/angel.jpg',
            'img2' => '/paket2/broken.jpg',
            'img3' => '/paket3/house.jpg',
            'img4' => '/paket3/atuh.jpg',
        ],
    ];

    if (!array_key_exists($slug, $pakets)) {
        abort(404);
    }

    return $pakets[$slug];
}

Route::get('/paket/{slug}', function ($slug) {
    $packageData = getPaketData($slug);

    return view('paket', $packageData);
})->name('paket');


Route::get('/list', function () {
    $pakets = [
        'one-day-trip-western' => getPaketData('one-day-trip-western'),
        'One-Day-Tour-west-Nusa-Penida' => getPaketData('One-Day-Tour-west-Nusa-Penida'),
        'One-Day-East-Tour-Nusa-Penida' => getPaketData('One-Day-East-Tour-Nusa-Penida'),
        'Combination-Nusa-Penida-Tour' => getPaketData('Combination-Nusa-Penida-Tour'),
    ];

    return view('list', ['pakets' => $pakets]);
});