<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preview Paket Standart</title>

        <!-- Font & Tailwind -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#4F46E5',
                            secondary: '#7C3AED',
                            soft: '#EEF2FF'
                        }
                    }
                }
            }
        </script>

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .gradient-hero {
                background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
            }

            .hover-lift {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .hover-lift:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            }
        </style>
    </head>

    <body class="bg-gray-50 text-gray-800">

    <!-- ================= HEADER ================= -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <span class="text-3xl font-black text-indigo-600">RJ.com</span>
                <span class="hidden sm:block text-sm text-gray-500 border-l pl-3">
                    SekolahPintar.my
                </span>
            </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-indigo-600 font-medium transition">Beranda</a>
                    <a href="index.php/#fitur" class="text-gray-700 hover:text-indigo-600 font-medium transition">Fitur</a>
                    <a href="index.php/#paket" class="text-gray-700 hover:text-indigo-600 font-medium transition">Paket</a>
                    <a href="index.php/#kontak" class="text-gray-700 hover:text-indigo-600 font-medium transition">Kontak</a>
                </nav>
            <a href="index.php#paket"
                class="bg-indigo-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-indigo-700 transition">
                    Kembali ke Paket
            </a>
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section class="gradient-hero text-white py-24">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center bg-white/20 backdrop-blur px-4 py-2 rounded-full mb-6 text-sm font-semibold">
                PREVIEW PAKET STANDART
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6">
                Digitalisasi Presensi<br class="hidden md:block">
                & Monitoring Sekolah
            </h1>

            <p class="text-lg md:text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed">
                Solusi ideal untuk sekolah yang ingin memulai transformasi digital
                melalui presensi siswa otomatis dan dashboard monitoring real-time.
            </p>
        </div>
    </section>

    <!-- ================= CONTENT ================= -->
    <section class="py-24">
        <div class="max-w-6xl mx-auto px-6">

            <!-- VIDEO PREVIEW -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 hover-lift">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">
                    🎥 Demo Sistem Presensi Sekolah
                </h2>

                <div class="flex justify-center">
                    <blockquote
                        class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/DTE7WtFkaWR/"
                        data-instgrm-version="14"
                        style="background:#FFF; border-radius:16px; max-width:540px; width:100%;">
                    </blockquote>
                </div>

                <p class="text-center text-gray-600 mt-8 max-w-2xl mx-auto">
                    Video di atas menampilkan contoh penggunaan sistem presensi siswa
                    berbasis QR/Barcode dengan laporan kehadiran dan monitoring real-time.
                </p>
            </div>

            <!-- FEATURE SECTION -->
            <div class="mt-20 grid md:grid-cols-2 gap-10 items-stretch">

                <!-- FITUR -->
                <div class="bg-white rounded-3xl shadow-xl p-8 flex flex-col">
                    <h3 class="flex items-center text-xl font-bold mb-6 text-indigo-600">
                        <span class="mr-2">✔</span>
                        Fitur Utama Paket Standart
                    </h3>

                    <ul class="space-y-3 text-gray-700 text-sm leading-relaxed flex-grow">
                        <li>• Website Profil Sekolah Modern</li>
                        <li>• Dashboard Kepala Sekolah</li>
                        <li>• Presensi Siswa QR / Barcode</li>
                        <li>• Rekap Kehadiran Otomatis</li>
                        <li>• Notifikasi Telegram / Admin</li>
                        <li>• Responsive (Desktop & Mobile)</li>
                    </ul>
                </div>

                <!-- COCOK UNTUK -->
                <div class="bg-white rounded-3xl shadow-xl p-8 flex flex-col">
                    <h3 class="flex items-center text-xl font-bold mb-6 text-indigo-600">
                        <span class="mr-2">🎯</span>
                        Cocok Untuk Sekolah
                    </h3>

                    <p class="text-gray-700 text-sm leading-relaxed mb-8 flex-grow">
                        Paket ini dirancang untuk sekolah yang ingin meningkatkan
                        kedisiplinan siswa, mengurangi presensi manual, serta
                        mempermudah monitoring kehadiran secara digital.
                    </p>

                    <a href="https://wa.me/6285643764042"
                    class="inline-flex items-center justify-center bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700 transition self-start">
                        Konsultasi via WhatsApp
                    </a>
                </div>

            </div>


    <!-- Instagram Embed Script -->
    <script async src="https://www.instagram.com/embed.js"></script>

    </body>
</html>
