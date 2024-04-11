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
                    <span>Airport Transfe</span>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <img src="images/airport.jpg" alt=""
                    class="h-64 md:h-96 rounded-2xl mb-4 flex items-center justify-center px-3">
                <div class="md:flex-1 px-4">
                    <h2 class="mb-1 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        Bali Airport Transfer</h2>
                    <p class="text-gray-500 text-sm">Lokasi <a href="#" class="text-indigo-600 hover:underline">Bali</a>
                    </p>
                    <div class="py-2">
                        <p class="text-gray-500 text-justify">Selamat datang di Bali Wishful Trips, mitra perjalanan
                            terpercaya Anda di Pulau Dewata! Dengan layanan Bali Airport Transfer kami, Anda dapat
                            menikmati
                            perjalanan yang nyaman dan aman dari Bandara Internasional Ngurah Rai ke destinasi tujuan
                            Anda
                            di Bali. Kami menyediakan sopir profesional yang ramah dan berpengalaman, serta kendaraan
                            ber-AC
                            yang akan membuat perjalanan Anda menjadi lebih menyenangkan.</p>
                        <br>
                        <p class="text-gray-500 text-justify">Ketika Anda tiba di bandara, Anda akan disambut oleh sopir
                            kami yang akan menunjukkan tanda bertuliskan nama Anda di titik pertemuan. Dengan pelayanan
                            yang
                            andal dan sopir yang terlatih, kami akan mengantar Anda dengan nyaman ke hotel atau
                            destinasi
                            lainnya di Bali. Nikmati perjalanan yang mulus dan tak terlupakan dengan Bali Airport
                            Transfer
                            dari Bali Wishful Trips!</p>
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
                                            Pick Up & Drop Location Area
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Standard MPV (Seats 6)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kuta |
                                            Legian | Jimbaran </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 200.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Seminyak |
                                            Sanur | Kerobokan | Nusa Dua</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 250.000
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Pecatu
                                            |
                                            Uluwatu</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 275.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Canggu
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 300.000
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Ubud
                                            Centre</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 325.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">North
                                            Ubud
                                            | Tanah Lot</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 400.000
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Padang
                                            Bai
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 475.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Candidasa
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 550.000
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Lovina
                                            |
                                            Amed</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 650.000
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Pemuteran
                                            | Tejakula</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Rp. 800.000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.cardrekomen')

        </div>
        <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
    </div>
    </div>
    @endsection
    =
</body>

</html>