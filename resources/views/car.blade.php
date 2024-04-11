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

<body>
    @extends('layouts.main')

    @section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-6 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="/" class="hover:underline hover:text-gray-600">Beranda</a>
                    </span>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Car Charter</span>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <img src="/images/car.jpeg" alt=""
                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center px-3 object-contain">

                <div class="md:flex-1 px-4">
                    <h2 class="mb-1 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        Car Charter</h2>
                    <p class="text-gray-500 text-sm">Lokasi <a href="#" class="text-indigo-600 hover:underline">Bali</a>
                    </p>
                    <div class="py-2">
                        <p class="text-gray-500 text-justify">Dengan Car Charter dari Bali Wishful Trips, Anda dapat
                            menyesuaikan perjalanan Anda sesuai dengan keinginan Anda. Nikmati kemudahan memesan
                            kendaraan
                            secara online atau melalui layanan pelanggan kami yang ramah. Jadikan setiap momen di Bali
                            menjadi pengalaman yang tak terlupakan dengan Car Charter dari Bali Wishful Trips!</p>
                        <br>
                        <p class="text-gray-500 text-justify">Tidak perlu khawatir tentang transportasi di Bali. Kami
                            akan
                            memastikan Anda tiba dengan aman dan nyaman di destinasi Anda, dengan sopir yang siap
                            memberikan
                            pelayanan terbaik. Percayakan perjalanan Anda kepada Bali Wishful Trips dan rasakan
                            kemudahan
                            menjelajahi Bali dengan Car Charter kami!</p>
                    </div>

                </div>
            </div>

            <div class="flex flex-col py-4 justify-end space-x-2">
                <button type="button" onclick="var win=window.open('https://wa.me/6289643441193','_blank');win.focus();"
                    class="h-14 px-6 py-2 font-semibold rounded-xl bg-black hover:bg-green-500 text-white">
                    Pesan via Whatsapp
                </button>
                <div class="flex justify-end mb-4 pr-3 text-sm">
                    <span>* Instant Confirmation</span>
                </div>
            </div>



            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full ">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-white border-b border-t-2">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Bali Private Car Charter Packages
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4
                                            Hours
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 400.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Halfday 6
                                            Hours</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 600.000
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Fullday 10
                                            Hours</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 700.000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 bg-gray-200 pt-10">
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-200 rounded-lg p-6">
                        <h1 class="font-bold mb-4">Notes</h1>
                        <p class="mb-4">Prices are applicable only for depart and or finish at main coverage area:
                            Tabanan,
                            Badung, Denpasar, Gianyar</p>
                        <p class="mb-4">For long drive to Karangasem, Buleleng, Jembrana, Bangli, Klungkung will be
                            extra
                            charge IDR 250.000 per vehicle/area</p>
                        <p class="mb-4">Night Service (pick up or drop off between 00:00-06:00) will be extra charge IDR
                            200.000</p>
                        <p>Extra hours IDR 100.000/hour (Regular Car)</p>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.cardrekomen')

    </div>
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
    @endsection
</body>

</html>