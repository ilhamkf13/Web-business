<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Website Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#7C3AED',
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-blue {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .best-seller-badge {
            position: absolute;
            top: 15px;
            right: -8px;
            background: linear-gradient(135deg, #F59E0B 0%, #EF4444 100%);
            color: white;
            padding: 6px 18px;
            font-weight: 700;
            font-size: 11px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 10% 100%);
        }

        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .shine:hover::before {
            left: 100%;
        }

        /* Contact Section Styles */
        .contact-section {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            color: white;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .contact-info {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            margin: 0;
            font-size: 1.1rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin-bottom: 1rem;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #3b82f6;
            background: rgba(255, 255, 255, 0.2);
        }

        .contact-form button {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .contact-form button:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <span class="text-3xl font-black text-indigo-600">RJ.com</span>
                    <span class="hidden sm:block text-sm text-gray-500 border-l pl-3">SekolahPintar.my</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium transition">Beranda</a>
                    <a href="#fitur" class="text-gray-700 hover:text-indigo-600 font-medium transition">Fitur</a>
                    <a href="#paket" class="text-gray-700 hover:text-indigo-600 font-medium transition">Paket</a>
                    <a href="#kontak" class="text-gray-700 hover:text-indigo-600 font-medium transition">Kontak</a>
                </nav>
                <a href="#kontak" class="bg-indigo-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-indigo-700 transition shine">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-blue text-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="text-yellow-300 mr-2">⭐⭐⭐⭐⭐</span>
                <span class="text-sm font-semibold">PREVIEW WEBSITE SEKOLAH</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6">
                Lihat Preview <br />Website Sekolah Kami
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed">
                Kami telah membantu ratusan sekolah di Indonesia memiliki website profesional, modern, dan fungsional. 
                Berikut beberapa contoh hasil pengerjaan terbaru.
            </p>
        </div>
    </section>

    <!-- Previews Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4">Website Sekolah Terbaru</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Setiap website dibangun dengan standar profesional: responsif, cepat, SEO-friendly, dan mudah dikelola.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Preview 1 -->
                <a href="https://smaislamsecang.sch.id" target="_blank" class="hover-lift block">
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold">SMA Islam Secang</h3>
                                    <p class="text-sm opacity-90">smaislamsecang.sch.id</p>
                                </div>
                                <div class="bg-white/20 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <img src="smais.jpeg" alt="Preview SMA Islam Secang" class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="text-lg font-bold text-gray-900 mb-2">Website Profil Sekolah</h4>
                            <p class="text-gray-600 mb-4">
                                Website profil sekolah dengan desain modern dan integrasi akademik lengkap.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-medium rounded-full">Responsif</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-medium rounded-full">SEO-Optimized</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                                    <span class="ml-1">Desktop & Mobile</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Preview 2 -->
                <a href="https://smksw.sch.id" target="_blank" class="hover-lift block">
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-700 text-white p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold">SMK SW</h3>
                                    <p class="text-sm opacity-90">smksw.sch.id</p>
                                </div>
                                <div class="bg-white/20 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <img src="smksw.jpeg" alt="Preview SMK SW" class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="text-lg font-bold text-gray-900 mb-2">Sistem Informasi Sekolah</h4>
                            <p class="text-gray-600 mb-4">
                                Sistem informasi sekolah vokasi dengan dashboard kepala sekolah dan presensi siswa.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-medium rounded-full">Seo-Optimize</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-medium rounded-full">Responsive Layout</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                                    <span class="ml-1">Desktop & Mobile</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Preview 3 -->
                <a href="https://masw.sch.id" target="_blank" class="hover-lift block">
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-pink-500 to-pink-700 text-white p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold">MA SW</h3>
                                    <p class="text-sm opacity-90">masw.sch.id</p>
                                </div>
                                <div class="bg-white/20 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <img src="masw.jpeg" alt="Preview MA SW" class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="text-lg font-bold text-gray-900 mb-2">Website Madrasah Aliyah</h4>
                            <p class="text-gray-600 mb-4">
                                Website madrasah aliyah dengan integrasi e-rapor dan bel sekolah digital.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-medium rounded-full">Web Profiles</span>
                                <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-medium rounded-full">Professional Layout</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                                    <span class="ml-1">Desktop & Mobile</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    

    <script>
        // Add shine effect for buttons
        document.querySelectorAll('.shine').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.setProperty('--shine-position', '100%');
            });
            button.addEventListener('mouseleave', function() {
                this.style.setProperty('--shine-position', '-100%');
            });
        });
    </script>
</body>
</html>

