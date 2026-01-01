<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SekolahPintar.my - Website Sekolah Tanpa Ribet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-white">

    <!-- Header / Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <span class="text-3xl font-black text-indigo-600">RJ.com</span>
                    <span class="hidden sm:block text-sm text-gray-500 border-l pl-3">SekolahPintar.my</span>
                </div>

                <nav class="hidden md:flex space-x-8">
                    <a href="#beranda" class="text-gray-700 hover:text-indigo-600 font-medium transition">Beranda</a>
                    <a href="#fitur" class="text-gray-700 hover:text-indigo-600 font-medium transition">Fitur</a>
                    <a href="#paket" class="text-gray-700 hover:text-indigo-600 font-medium transition">Paket</a>
                    <a href="#kontak" class="text-gray-700 hover:text-indigo-600 font-medium transition">Kontak</a>
                </nav>

                <a href="#kontak"
                    class="bg-indigo-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-indigo-700 transition shine">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="gradient-blue text-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <span class="text-yellow-300 mr-2">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm font-semibold">REKOMENDASI</span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black leading-tight">
                        Ingin Website<br />Sekolah Tanpa<br />Ribet?
                    </h1>

                    <p class="text-xl text-indigo-100 leading-relaxed">
                        Transformasikan sekolah Anda menjadi lebih modern, profesional, dan terpercaya bersama <span
                            class="font-bold text-white">SekolahPintar.my</span>
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#paket"
                            class="bg-white text-indigo-600 px-8 py-4 rounded-full font-bold hover:bg-gray-50 transition inline-flex items-center shine">
                            Lihat Paket Kami
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        <a href="#kontak"
                            class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-indigo-600 transition">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                <!--div class="relative">
                    <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/30 shadow-2xl">
                        <div class="bg-white rounded-2xl p-8 text-center">
                            <div class="text-7xl mb-4">👩‍🏫</div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Kabari Gratis</h3>
                            <p class="text-gray-600 mb-6">Transformasi digital untuk sekolah modern</p>
                            <button
                                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 px-6 rounded-xl font-bold hover:from-indigo-700 hover:to-purple-700 transition">
                                LEARN MORE
                            </button>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4">Kenapa Memilih Kami?</h2>
                <p class="text-xl text-gray-600">Solusi terpercaya untuk website sekolah profesional</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift text-center">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Profesional & Modern</h3>
                    <p class="text-gray-600">Desain website yang profesional mengikuti tren terkini</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift text-center">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cepat & Responsif</h3>
                    <p class="text-gray-600">Loading super cepat dan tampil sempurna di semua perangkat</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift text-center">
                    <div
                        class="bg-gradient-to-br from-pink-500 to-pink-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Support 24/7</h3>
                    <p class="text-gray-600">Tim support siap membantu Anda kapan saja dibutuhkan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="paket" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-block bg-indigo-100 text-indigo-600 px-5 py-2 rounded-full text-sm font-bold mb-4">
                    ALL IN ONE PACKAGE - PRICE LIST
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4">Pilih Paket Yang Sesuai</h2>
                <p class="text-xl text-gray-600">Harga terjangkau dengan fitur lengkap untuk sekolah Anda</p>
            </div>

            <!-- Main 7 Packages -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">

                <!-- STARTER Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white p-6">
                        <h3 class="text-2xl font-bold">STARTER</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">250.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil instansi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Training online 1x</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">1x revisi konten awal</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Domain & hosting sekolahpintar.my/namainstansi</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="https://sekolahpintar.my/sekolahku/"
                        class="w-full bg-emerald-600 text-white py-3 rounded-xl font-bold hover:bg-emerald-700 transition shine text-center inline-block">
                        Preview
                        </a>
                    </div>
                </div>

                <!-- BASIC Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6">
                        <h3 class="text-2xl font-bold">BASIC</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">750.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil instansi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Training online 1x</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">3x revisi konten awal</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Domain & hosting atas nama instansi(.sch.id) 1 tahun</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="preview-basic.php"
                            class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

                <!-- STANDART Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-6">
                        <h3 class="text-2xl font-bold">STANDART</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">1.500.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Dashboard kepala sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Presensi siswa</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Alat presensi (barcode)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Integrasi Telegram notifikasi</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href=""
                            class="w-full bg-purple-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

                <!-- MEDIUM Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white p-6">
                        <h3 class="text-2xl font-bold">MEDIUM</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">3.000.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Dashboard kepala sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Presensi siswa RFID (card)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Alat Scanner Presensi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Integrasi Telegram notifikasi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Aplikasi Bel Sekolah</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href=""
                            class="w-full bg-yellow-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

                <!-- ADVANCED Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white p-6">
                        <h3 class="text-2xl font-bold">ADVANCED</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">5.000.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Dashboard kepala sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Presensi siswa RFID (10 card)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">RFID Scanner</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Integrasi Telegram notifikasi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Aplikasi Bel Sekolah</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href=""
                            class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

                <!-- PRO Package -->
                <div
                    class="bg-white rounded-2xl shadow-xl overflow-hidden hover-lift border-2 border-gray-100 h-full flex flex-col">
                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 text-white p-6">
                        <h3 class="text-2xl font-bold">PRO</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">7.500.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Dashboard kepala sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Sistem Informasi Akademik (Siswa, Guru, Tendik, E-Rapor,
                                    Penilaian)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href=""
                            class="w-full bg-teal-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

                <!-- PREMIUM Package -->
                <div
                    class="bg-white rounded-2xl shadow-2xl overflow-hidden hover-lift border-4 border-yellow-400 relative h-full flex flex-col">
                    <div class="best-seller-badge">BEST SELLER</div>
                    <div class="bg-gradient-to-r from-yellow-500 to-amber-600 text-white p-6">
                        <h3 class="text-2xl font-bold">PREMIUM</h3>
                        <p class="text-sm opacity-90">PACKAGE</p>
                    </div>
                    <div class="p-6 flex-grow">
                        <div class="mb-6">
                            <span class="text-gray-600 text-lg">RP</span>
                            <span class="text-4xl font-black text-gray-900">10.000.000</span>
                        </div>
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Website profil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Dashboard kepala sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Sistem Informasi Akademik (Siswa, Guru, Tendik, E-Rapor,
                                    Penilaian)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Bel Sekolah</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Presensi RFID</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-6 pb-6">
                        <a href=""
                            class="w-full bg-gradient-to-r from-yellow-500 to-amber-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shine text-center inline-block">
                            Preview
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-20 contact-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-white mb-4">Hubungi Kami Sekarang!</h2>
                <p class="text-xl text-blue-100">Transformasikan sekolah Anda menjadi lebih modern, profesional, dan
                    terpercaya bersama SekolahPintar.my</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Information Card -->
                <div class="contact-card">
                    <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>

                    <div class="contact-info">
                        <div class="contact-icon">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.501.95l-1.498 4.493A1 1 0 017.28 16H3m2-2h8m0-4h8m-8 4a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v8a2 2 0 01-2 2m-8 0H3m8 0H7m8 0h8" />
                            </svg>
                        </div>
                        <p>085643764042</p>
                    </div>

                    <div class="contact-info">
                        <div class="contact-icon">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14v-2H5v2z" />
                            </svg>
                        </div>
                        <p>hello@gmail.com</p>
                    </div>

                    <div class="contact-info">
                        <div class="contact-icon">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.995 1.995 0 01-2.828 0l-4.244-4.244a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <p>Pagonan RT 01/01, Sidogede, Grabag, Magelang</p>
                    </div>

                    <div class="mt-8">
                        <div
                            class="inline-flex items-center bg-yellow-500/20 text-yellow-300 px-4 py-2 rounded-full text-sm font-semibold">
                            <span class="mr-2">⭐</span>
                            Konsultasi Gratis!
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-card">
                    <h3 class="text-2xl font-bold mb-6">Kirim Pesan</h3>
                    <!-- Ganti tag <form> dengan <div> -->
                    <div class="contact-form">
                        <input type="text" id="whatsapp-nama" placeholder="Nama Lengkap" required
                            class="w-full p-3 rounded-lg border border-white/30 bg-white/10 text-white focus:outline-none focus:border-blue-500">
                        <input type="tel" id="whatsapp-tel" placeholder="Nomor Telepon (Opsional)"
                            class="w-full p-3 rounded-lg border border-white/30 bg-white/10 text-white focus:outline-none focus:border-blue-500">
                        <textarea id="whatsapp-pesan" rows="5" placeholder="Pesan Anda" required
                            class="w-full p-3 rounded-lg border border-white/30 bg-white/10 text-white focus:outline-none focus:border-blue-500"></textarea>
                        <!-- Ganti button type="submit" dengan button type="button" dan tambahkan onclick -->
                        <button type="button" onclick="kirimPesanWhatsApp()">Kirim Pesan via WhatsApp</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </section>

    <script src="script.js"></script>
</body>

</html>