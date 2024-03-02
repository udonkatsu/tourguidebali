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
</head>
<style>
.date:after {
    content: "";
    position: absolute;
    border-top: 1px solid #e2e8f0;
    top: 12px;
    width: 150px;
}

.date:after {
    margin-left: 15px;
}
</style>

<body class="" style="">
    @extends('layouts.main')

    @include('layouts.navbar')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @section('content')
    <div class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="#" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">Paket Tour Bali</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span>{{ $title }}</span>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div x-data="{ image: 1 }" x-cloak>
                        <div class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4">
                            <div x-show="image === 1"
                                class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                <span class="text-5xl">1</span>
                            </div>

                            <div x-show="image === 2"
                                class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                <span class="text-5xl">2</span>
                            </div>

                            <div x-show="image === 3"
                                class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                <span class="text-5xl">3</span>
                            </div>

                            <div x-show="image === 4"
                                class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                <span class="text-5xl">4</span>
                            </div>
                        </div>

                        <div class="flex -mx-2 mb-4">
                            <template x-for="i in 4">
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = i"
                                        :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                        class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                        <span x-text="i" class="text-2xl"></span>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        {{ $title }}</h2>
                    <p class="text-gray-500 text-sm">Lokasi <a href="#" class="text-indigo-600 hover:underline">Bali</a>
                    </p>

                    <div class="flex items-center space-x-4 my-4">
                        <div>
                            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                                <span class="text-black mr-1 mt-1">Rp.</span>
                                <span class="font-bold text-black text-3xl">450.000</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <p class="text-black text-xl font-semibold">3-5 Orang</p>
                            <p class="text-gray-400 text-sm">Harga Per Orang.</p>
                        </div>
                    </div>

                    <p class="text-gray-500">Rasakan keindahan spiritual dan alam Bali yang sejati dengan Paket Tour
                        Besakih dari Wisata Bali Penida. Nikmati momen berdiri di depan Pura Besakih, sambil memandang
                        gunung dan alam sekitarnya yang memukau. Pengalaman ini tidak sekadar kunjungan biasa; Anda akan
                        diajak menjelajahi tempat-tempat suci lainnya seperti Pura Goa Lawah dan Kerta Gosa Klungkung.
                        Sambil menikmati makan siang di Bukit Jambul, Anda bisa menyaksikan pemandangan indah yang
                        memikat hati. Jangan lupa untuk berfoto di depan Handara Gate dan merasakan ketenangan di Pura
                        Besakih. Dengan harga terjangkau mulai dari Rp 475,000, Paket Tour Besakih menawarkan pengalaman
                        tak terlupakan untuk merasakan kedamaian spiritual dan keindahan alam Bali yang otentik. Pesan
                        sekarang dan buat kenangan yang tak terlupakan!.</p>

                    <div class="flex py-4 space-x-2 items-start">
                        <div class="relative">
                        </div>
                        <button type="button"
                            class="h-14 px-6 py-2 font-semibold rounded-xl bg-black hover:bg-green-500 text-white">
                            Pesan via Whatsapp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
    </div>


    @include('layouts.fasilitas')
    @include('layouts.footer')
    @endsection
</body>

</html>