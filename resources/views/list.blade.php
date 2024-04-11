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

@section('content')

<body class="" style="">

    <div class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="/" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">Paket Tour Nusa Penida</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <h2 class="mb-1 leading-tight tracking-tight font-bold text-gray-800 text-4xl md:text-2xl">
                    Pilihan Paket Nusa Penida</h2>
                <div class="pt-5 ">
                    <p class="text-gray-500 text-justify">Selamat datang di Bali Wishful Trips, mitra perjalanan
                        terpercaya Anda di Pulau Dewata! Dengan layanan Pilihan Paket Tour Nusa Penida kami, Anda akan
                        diajak untuk menjelajahi keindahan Nusa Penida, pulau yang menakjubkan di sekitar Bali.</p>
                    <br>
                    <p class="text-gray-500 text-justify">Dengan paket tour ini, Anda akan mengalami petualangan yang
                        tak terlupakan dengan pemandangan alam yang memukau, pantai-pantai yang indah, dan destinasi
                        menarik lainnya di Nusa Penida. Kami menyediakan paket tour yang lengkap dengan panduan lokal
                        yang berpengalaman untuk memastikan Anda mendapatkan pengalaman terbaik selama berada di Nusa
                        Penida.</p>
                    <br>
                    <p class="text-gray-500 text-justify">Nikmati kemudahan dalam merencanakan perjalanan Anda dengan
                        memilih salah satu dari berbagai pilihan paket tour kami yang sesuai dengan preferensi dan
                        kebutuhan Anda. Dengan Bali Wishful Trips, Anda akan menjelajahi Nusa Penida dengan cara yang
                        menyenangkan dan tak terlupakan!</p>
                </div>
            </div>
            <img src="https://i.pinimg.com/564x/32/06/1d/32061d87bf62c230fe1e90ca2e982cc5.jpg" alt=""
                class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center px-3">
        </div>
    </div>



    <div class="py-5 holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
        @foreach($pakets as $slug => $paket)
        <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
            <img class="w-full" src="{{ $paket['image_url'] }}" alt="{{ $paket['title'] }}" />
            <div class="badge absolute top-0 right-0 bg-gray-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                {{ $paket['badge'] }}
            </div>
            <div class="desc p-4 text-gray-800">
                <a href="{{ route('paket', $slug) }}"
                    class="title font-bold block cursor-pointer hover:underline">{{ $paket['title'] }}</a>
                <span class="description text-sm block py-2 border-gray-400 mb-2 text-justify">
                    @if (strlen($paket['deskripsi']) > 100)
                    {{ substr($paket['deskripsi'], 0, 100) . '...' }}
                    @else
                    {{ $paket['deskripsi'] }}
                    @endif
                </span>
                <div class="text-right">
                    <p class="font-bold text-gray-600">Rp. {{ $paket['harga'] }}</p>
                    <a href="{{ $paket['link'] }}">
                        <button class="bg-gray-600 text-white px-4 py-2 rounded mt-2">Pesan Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection

    @extends('layouts.main')

</body>

</html>