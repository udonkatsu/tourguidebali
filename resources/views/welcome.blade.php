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

<body class="" style="">

    @include('layouts.navbar')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    @include('layouts.LandingPage')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto text-justify">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-6/12 px-4 mb-8 md:mb-0">
                    <div class="max-w-md mx-auto px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg bg-white shadow-lg">
                            <blockquote class="relative p-8 mb-4">
                                <h4 class="text-4xl font-bold text-black mb-4 text-left">
                                    Kenapa memilih TourGuide?
                                </h4>
                                <p class="text-md font-light text-black mb-4">
                                    Kami adalah perusahaan Tour Bali dan Nusa Penida yang legal dengan harga kompetitif
                                    di Kepulauan Bali, dan telah berpengalaman dalam jasa pariwisata Bali di bidang Tour
                                    dan Travel selama belasan tahun.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Dengan bangga kami menawarkan berbagai jasa pilihan paket tour Bali dan Nusa Penida.
                                    Silakan bersantai dan nikmati semua pilihan layanan wisata kami yang tersedia
                                    melalui situs web kami.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Semua persiapan sebelum tour sudah kami siapkan untuk menjamin kelancaran anda
                                    selama menggunakan jasa kami. Keselamatan dan kenyamanan Anda adalah perhatian utama
                                    kami.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Dengan pelayanan yang profesional, kami menjamin Anda akan mendapatkan pengalaman
                                    wisata yang tak terlupakan di Bali dan Nusa Penida.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Kami selalu siap membantu Anda dalam merencanakan perjalanan impian Anda, mulai dari
                                    memilih paket tur hingga memberikan saran terbaik untuk mengoptimalkan liburan Anda.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Dengan TourGuide, Anda tidak hanya mendapatkan tur yang luar biasa, tetapi juga
                                    memperoleh teman perjalanan yang peduli dan membantu, siap memberikan pengalaman
                                    liburan yang tak terlupakan.
                                </p>
                                <p class="text-md font-light text-black mb-4">
                                    Jadi, jangan ragu untuk memilih TourGuide sebagai mitra perjalanan Anda di Bali dan
                                    Nusa Penida. Kami akan membantu mewujudkan liburan Anda menjadi pengalaman yang tak
                                    terlupakan!
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!-- Bagian Fitur -->
                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                            <div class="relative flex flex-col min-w-0 bg-white rounded-lg shadow-lg">
                                <div class="p-6 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Pelayanan Terbaik</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Dari persiapan hingga pelaksanaan tour kami memastikan Anda mendapatkan
                                        pengalaman terbaik dan tak terlupakan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                            <div class="relative flex flex-col min-w-0 bg-white rounded-lg shadow-lg">
                                <div class="p-6 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Transaksi Aman</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Kami menjamin bahwa proses pemesanan dan pembayaran dilakukan dengan aman dan
                                        terlindungi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                            <div class="relative flex flex-col min-w-0 bg-white rounded-lg shadow-lg">
                                <div class="p-6 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-percent"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Banyak Diskon</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Wisata Bali Penida juga menawarkan berbagai diskon yang membuat paket tour kami
                                        jadi lebih terjangkau.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                            <div class="relative flex flex-col min-w-0 bg-white rounded-lg shadow-lg">
                                <div class="p-6 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Layanan 24/7</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Kami menyediakan layanan pelanggan sepanjang waktu untuk menangani pertanyaan
                                        atau kebutuhan pelanggan kapan saja
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.cardrekomen')

    <!-- @include('layouts.blogpage') -->

    <div class="pt-10">
        <div class="bg-gray-200 rounded-lg py-10 my-10">
            <div class="container flex flex-col mx-auto rounded-lg pt-12 my-5">
                <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                    <div class="flex flex-col gap-7">
                        <div class="flex flex-col gap-2 px-6 text-center w-10/12 mx-auto">
                            <h2 class="text-3xl font-extrabold leading-tight lg:text-4xl text-dark-grey-900">Apakah Kamu
                                Memiliki Pertanyaan?</h2>
                            <h2 class="text-3xl font-extrabold leading-tight lg:text-4xl text-dark-grey-900">Hubungi
                                kami!
                            </h2>
                            <p class="text-base font-medium leading-7 text-dark-grey-600">Klik Tombol dibawah ini untuk
                                menghubungi kami.</p>
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="var win=window.open('https://wa.me/6289643441193','_blank');win.focus();"
                                class="flex items-center justify-center py-4 text-white px-7 rounded-2xl bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:ring-gray-100 transition duration-300">Hubungi
                                Kami</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex flex-wrap -mx-3 my-5">
        <div class="w-full max-w-full sm:w-3/4 mx-auto text-center">
        </div>
    </div>
    </div>

    @include('layouts.footer')

</body>

</html>