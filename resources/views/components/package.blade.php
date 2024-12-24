<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Packages</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS (Animate On Scroll) CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000, // Duration of animations in milliseconds
                once: true, // Whether the animation should only happen once
            });
        });
    </script>
</head>
<body class="bg-gray-50">

    <!-- Features Section -->
    <section class="py-16 bg-gray-100" id="package">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Outstanding Service</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">

                <!-- Internet Broadband -->
                <div data-aos="fade-up" class="bg-white shadow-md rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:opacity-80 hover:shadow-2xl">
                    <img src="/img/a.jpg" alt="Internet Broadband" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Internet Broadband</h3>
                        <p class="mt-2 text-gray-600 text-justify">
                            Internet broadband adalah jenis koneksi internet yang mana kecepatannya dibagi rata
                            sesuai jumlah pengguna atau padatnya penggunaan internet.
                        </p>
                    </div>
                </div>

                <!-- Internet Dedicated -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white shadow-md rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:opacity-80 hover:shadow-2xl">
                    <img src="/img/b.jpg" alt="Internet Dedicated" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Internet Dedicated</h3>
                        <p class="mt-2 text-gray-600 text-justify">
                            Internet dedicated merupakan jenis jaringan yang memiliki rasio bandwidth 1:1 yang
                            memiliki arti bahwa bandwidth yang Anda gunakan tidak terbagi dengan user lain.
                        </p>
                    </div>
                </div>

                <!-- IT Consultant -->
                <div data-aos="fade-up" data-aos-delay="400" class="bg-white shadow-md rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:opacity-80 hover:shadow-2xl">
                    <img src="/img/it.jpg" alt="IT Consultant" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">IT Consultant</h3>
                        <p class="mt-2 text-gray-600 text-justify">
                            Seorang Konsultan IT memberikan saran ahli tentang penggunaan teknologi, menganalisis
                            infrastruktur, dan merekomendasikan solusi praktis untuk mencapai tujuan bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="py-16 bg-gradient-to-r from-gray-100" 
        style="background-image: url('/img/gg.jpg'); background-size: cover; background-position: center; filter: brightness(105%);">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-800">Broadband Internet Package</h2>
            <p class="text-gray-600 mt-2 text-xl">Choose the best internet package for your needs</p>

            <!-- Scrollable container -->
            <div class="relative mt-10">
                <!-- Packages container for horizontal scrolling -->
                <div class="scroll-container flex overflow-x-auto snap-x snap-mandatory space-x-6 pb-4">
                    
                    <!-- Paket Hemat -->
                    <div data-aos="zoom-in" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/10.jpg" alt="Paket Hemat" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Hemat</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 150K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 10 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Nikmati koneksi cepat dan stabil dengan paket hemat ini. Cocok untuk kebutuhan sehari-hari dan streaming.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                    <!-- Paket Ekonomis -->
                    <div data-aos="zoom-in" data-aos-delay="200" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/15.jpg" alt="Paket Ekonomis" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Ekonomis</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 183K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 15 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Paket ini cocok untuk pengguna dengan kebutuhan koneksi yang lebih cepat.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                    <!-- Paket Standar -->
                    <div data-aos="zoom-in" data-aos-delay="400" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/20.jpg" alt="Paket Standar" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Standar</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 250K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 20 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Ideal untuk kebutuhan internet lebih intensif seperti video streaming dan browsing.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                    <!-- Paket Premium -->
                    <div data-aos="zoom-in" data-aos-delay="600" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/30.jpg" alt="Paket Premium" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Premium</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 283K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 30 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Paket ini cocok untuk streaming video berkualitas tinggi dan pengguna online lainnya.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                    <!-- Paket Super -->
                    <div data-aos="zoom-in" data-aos-delay="800" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/50.jpg" alt="Paket Super" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Super</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 311K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 50 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Paket dengan kecepatan tinggi, ideal untuk streaming 4K, gaming, dan kegiatan online lainnya.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                    <!-- Paket Ultra -->
                    <div data-aos="zoom-in" data-aos-delay="1000" class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg hover:scale-105 hover:opacity-80 transform transition-all duration-300 ease-in-out min-w-[280px] lg:w-auto snap-center">
                        <img src="img/100.jpg" alt="Paket Ultra" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Paket Ultra</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-white">Rp. 505K</span>
                                <span class="bg-white text-blue-600 px-3 py-1 rounded-md text-sm font-medium">Up to 100 Mbps</span>
                            </div>
                            <p class="text-white text-sm mb-4">Paket eksklusif untuk kecepatan tertinggi dan penggunaan internet tanpa batas.</p>
                            <a href="https://wa.me/6282152161126" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Pasang Sekarang</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>
</html>
