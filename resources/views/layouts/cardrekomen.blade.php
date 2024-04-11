<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paket Tour Bali dan Nusa Penida Terbaik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>

<body>

    <div class="pt-16 bg-white overflow-hidden">
        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
            <div>
                <span class="text-gray-600 text-lg font-semibold">Rekomendasi</span>
                <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Mungkin anda tertarik dengan paket
                    <br class="lg:block" hidden> Dibawah ini
                </h2>
            </div>
        </div>
    </div>

    <div class="py-5 holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
        <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
            <img class="w-full h-64 object-cover" src="images/paket1/snorkling.jpg" alt="tittle" />
            <div class="badge absolute top-0 right-0 bg-gray-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                Populer
            </div>
            <div class="desc p-4 text-gray-800">
                <a href="#" class="title font-bold block cursor-pointer hover:underline">One Day Trip Western +
                    Snorkeling</a>
                <span class="description text-sm block py-2 border-gray-400 mb-2 text-justify">
                    Experience an unforgettable adventure with the One Day Trip Western + Snorkeling PACKAGE (A) from
                    Wi...
                </span>
                <div class="text-right">
                    <p class="font-bold text-gray-600">Rp. 800.000</p>
                    <a href="#">
                        <button class="bg-gray-600 text-white px-4 py-2 rounded mt-2">Pesan Sekarang</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
            <img class="w-full h-64 object-cover" src="images/paket2/kelingking.jpg" alt="tittle" />
            <div class="badge absolute top-0 right-0 bg-gray-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                Populer
            </div>
            <div class="desc p-4 text-gray-800">
                <a href="#" class="title font-bold block cursor-pointer hover:underline">One Day Tour west Nusa
                    Penida</a>
                <span class="description text-sm block py-2 border-gray-400 mb-2 text-justify">
                    Welcome to the West Nusa Penida Tour Package! Explore the breathtaking natural beauty of the
                    western...
                </span>
                <div class="text-right">
                    <p class="font-bold text-gray-600">Rp. 650.000</p>
                    <a href="#">
                        <button class="bg-gray-600 text-white px-4 py-2 rounded mt-2">Pesan Sekarang</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
            <img class="w-full h-64 object-cover" src="images/paket3/diamond.jpg" alt="tittle" />
            <div class="badge absolute top-0 right-0 bg-gray-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                Populer
            </div>
            <div class="desc p-4 text-gray-800">
                <a href="#" class="title font-bold block cursor-pointer hover:underline">One Day East Tour Nusa
                    Penida</a>
                <span class="description text-sm block py-2 border-gray-400 mb-2 text-justify">
                    Discover the Hidden Gems of East Nusa Penida with Our Tour Package! Embark on an unforgettable
                    journ...
                </span>
                <div class="text-right">
                    <p class="font-bold text-gray-600">Rp. 750.000</p>
                    <a href="#">
                        <button class="bg-gray-600 text-white px-4 py-2 rounded mt-2">Pesan Sekarang</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
            <img class="w-full h-64 object-cover" src="images/paket2/angel.jpg" alt="tittle" />
            <div class="badge absolute top-0 right-0 bg-gray-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                Populer
            </div>
            <div class="desc p-4 text-gray-800">
                <a href="#" class="title font-bold block cursor-pointer hover:underline">Combination (West and east
                    Side)</a>
                <span class="description text-sm block py-2 border-gray-400 mb-2 text-justify">
                    Experience the Best of Both Worlds with Our Nusa Penida East and West Combination Tour Package!
                    Imme...
                </span>
                <div class="text-right">
                    <p class="font-bold text-gray-600">Rp. 750.000</p>
                    <a href="#">
                        <button class="bg-gray-600 text-white px-4 py-2 rounded mt-2">Pesan Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>

</html>