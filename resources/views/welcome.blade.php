<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paket Tour Bali dan Nusa Penida Terbaik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
</head>

<body class="" style=""> <!-- Ganti URL dengan URL gambar Anda -->

    <!-- Panggil Navbar -->
    @include('layouts.navbar')

    <!-- Konten Utama -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <section class="relative  bg-blueGray-50">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
            background-image: url('https://e1.pxfuel.com/desktop-wallpaper/525/839/desktop-wallpaper-sunset-kuta-bali-beach-bali-beach.jpg');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                JELAJAHI WISATA BALI BERSAMA KAMI
                            </h1>
                            <p class="mt-4 text-lg text-blueGray-200">
                                Paket Tour Bali dan Nusa Penida Terbaik dengan Harga Terjangkau di Wisata Bali Penida
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-10 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                        class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                        <h3 class="mb-3 text-xl font-bold text-indigo-600">Paket Tour Nusa Penida</h3>
                        <div class="relative">
                            <img class="w-full rounded-xl"
                                src="https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/@yesimgrll-e1576055095706-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg"
                                alt="Colors" />
                            <p
                                class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                                Mulai Dari Rp.475,000</p>
                        </div>
                        <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer text-left">Pilihan Tour Nusa Penida</h1>
                        <div class="my-4">
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pilihan destinasi terpopuler di Nusa Penida</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Tersedia pilihan durasi tour</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pembatalan Gratis</p>
                            </div>
                            <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg mb-10">Lihat Paket Bali</button>
                        </div>
                    </div>
                    </div>
                    <div
                        class="max-w-sm bg-white px-6 pt-6 mt-5 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500 text-center">
                        <h3 class="mb-3 text-xl font-bold text-indigo-600">Paket Tour Bali</h3>
                        <div class="relative">
                            <img class="w-full rounded-xl"
                                src="https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/@yesimgrll-e1576055095706-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg"
                                alt="Colors" />
                            <p
                                class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                                Mulai Dari Rp.475,000</p>
                        </div>
                        <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer text-left">Pilihan Paket Tour Bali</h1>
                        <div class="my-4">
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pilihan destinasi terpopuler di Bali</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Tersedia pilihan durasi tour</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pembatalan Gratis</p>
                            </div>
                            <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Lihat Paket Bali</button>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                        class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                        <h3 class="mb-3 text-xl font-bold text-indigo-600">Paket Tour Bali</h3>
                        <div class="relative">
                            <img class="w-full rounded-xl"
                                src="https://wisatabalipenida.com/wp-content/uploads/elementor/thumbs/@yesimgrll-e1576055095706-qiavw3es0zky8kgk75z5xsqv9a189wgmx9n7zmpg4e.jpg"
                                alt="Colors" />
                            <p
                                class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                                Mulai Dari Rp.475,000</p>
                        </div>
                        <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Pilihan Aktivitas di Bali</h1>
                        <div class="my-4">
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pilihan destinasi terpopuler di Bali</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Tersedia pilihan durasi tour</p>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p>Pembatalan Gratis</p>
                            </div>
                            <button class="mt-6 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg mb-12">Lihat Paket Bali</button>
                        </div>
                    </div>
                    </div>
                </div>
        </section>
    </section>

    @include('layouts.blogpage')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="relative pt-16 bg-blueGray-50">
<div class="container mx-auto">
  <div class="flex flex-wrap items-center">
    <div class="w-10/12 md:w-6/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
    <div class="max-w-3xl mx-auto px-4 mb-6">
    <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg">
        <blockquote class="relative p-8 mb-4">
            <h4 class="text-4xl font-bold text-black">
                Kenapa memilih TourGuide?
            </h4>
            <p class="text-md font-light mt-2 text-black">
                Kami adalah perusahaan Tour Bali dan Nusa Penida yang legal dengan harga kompetitif di Kepulauan Bali, dan telah berpengalaman dalam jasa pariwisata Bali di bidang Tour dan Travel selama belasan tahun.
            </p>
            <p class="text-md font-light mt-2 text-black">
                Dengan bangga kami menawarkan berbagai jasa pilihan paket tour Bali dan Nusa Penida. Silakan bersantai dan nikmati semua pilihan layanan wisata kami yang tersedia melalui situs web kami.
            </p>
            <p class="text-md font-light mt-2 text-black">
                Semua persiapan sebelum tour sudah kami siapkan untuk menjamin kelancaran anda selama menggunakan jasa kami. Keselamatan dan kenyamanan Anda adalah perhatian utama kami.
            </p>
        </blockquote>
    </div>
</div>

</div>

    <div class="w-full md:w-6/12 px-4">
      <div class="flex flex-wrap">
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                <i class="fas fa-heart"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">Pelayanan Terbaik</h6>
              <p class="mb-4 text-blueGray-500">
                Dari persiapan hingga pelaksanaan tour kami memastikan Anda mendapatkan pengalaman terbaik dan tak terlupakan.
              </p>
            </div>
          </div>
          <div class="relative flex flex-col min-w-0">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                <i class="fas fa-credit-card"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">
                Transaksi Aman
              </h6>
              <p class="mb-4 text-blueGray-500">
                Kami menjamin bahwa proses pemesanan dan pembayaran dilakukan dengan aman dan terlindungi.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col min-w-0 mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                <i class="fas fa-percent"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">Banyak Diskon</h6>
              <p class="mb-4 text-blueGray-500">
                Wisata Bali Penida juga menawarkan berbagai diskon yang membuat paket tour kami jadi lebih terjangkau.
              </p>
            </div>
          </div>
          <div class="relative flex flex-col min-w-0 pt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                <i class="fas fa-headset"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">Layanan 24/7</h6>
              <p class="mb-4 text-blueGray-500">
                Kami menyediakan layanan pelanggan sepanjang waktu untuk menangani pertanyaan atau kebutuhan pelanggan kapan saja
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
    
<div class="bg-blueGray-200 rounded-lg">
    <div class="container flex flex-col mx-auto bg-blueGray-200 rounded-lg pt-12 my-5">
      <div class="container flex flex-col items-center gap-16 mx-auto my-32">
        <div class="flex flex-col gap-7">
          <div class="flex flex-col gap-2 px-6 text-center w-10/12 mx-auto">
            <h2 class="text-3xl font-extrabold leading-tight lg:text-4xl text-dark-grey-900">Apakah Kamu Memiliki Pertanyaan?</h2>
            <h2 class="text-3xl font-extrabold leading-tight lg:text-4xl text-dark-grey-900">Hubungi kami!</h2>
            <p class="text-base font-medium leading-7 text-dark-grey-600">Klik Tombol dibawah ini untuk menghubungi kami.</p>
          </div>
          <div class="flex items-center justify-center">
            <button class="flex items-center justify-center py-4 text-white px-7 rounded-2xl bg-purple-blue-500 hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 transition duration-300">Hubungi Kami</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="flex flex-wrap -mx-3 my-5">
      <div class="w-full max-w-full sm:w-3/4 mx-auto text-center">
        <p class="text-sm text-slate-500 py-1"> Copyright © 2024 TourGuide.</p>
      </div>
    </div>
  </div>

    @include('layouts.footer')
</body>
</html>
