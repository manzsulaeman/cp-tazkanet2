@extends('layouts.app')

@section('main')
<!-- Product Section -->
<section class="pt-24 pb-16 bg-gradient-to-r from-gray-100" 
    style="background-image: url('/img/gg.jpg'); background-size: cover; background-position: center; filter: brightness(105%);">
    <div class="container mx-auto text-center px-4 sm:px-2">
        <h2 class="text-4xl sm:text-2xl font-semibold text-gray-800">Internet Dedicated</h2>
        <p class="text-gray-600 mt-2 text-xl sm:text-sm">Choose the package that suits your business needs.</p>

        <!-- Scrollable container -->
        <div class="relative mt-10 sm:mt-6">
            <!-- Packages container for horizontal scrolling -->
            <div class="relative flex overflow-x-auto snap-x snap-mandatory pb-4 space-x-6 sm:space-x-4 items-center justify-start sm:justify-center">

                <!-- Paket Super -->
                <div data-aos="zoom-in" data-aos-delay="800" 
                    class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg min-w-[260px] w-full sm:w-72 snap-center mx-2 hover:scale-105 transition-transform duration-500 ease-in-out hover:opacity-90">
                    <img src="img/100mb.jpg" alt="Paket Super" class="w-full h-40 sm:h-32 object-cover rounded-t-xl">
                    <div class="p-4 sm:p-3 text-center">
                        <h3 class="text-xl sm:text-base font-bold text-white mb-2">Dedicated Basic</h3>
                        <p class="text-white text-lg sm:text-sm font-semibold">Rp<span class="text-white text-xl">Call</span><span class="text-gray-300 text-sm">/bln</span></p>
                        <ul class="mt-3 text-white text-sm sm:text-xs text-left space-y-2">
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Speed 100 Mbps</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Ratio Bandwidth 1:1</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> SLA 99.5%</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> 1 Public IPv4</li>
                            <li class="flex items-center"><i class="text-white fas fa-lightbulb mr-2"></i> Belum Termasuk PPN 12%</li>
                            <li class="flex items-center"><i class="text-white fas fa-phone-alt mr-2"></i> Support 24x7</li>
                        </ul>
                        <div class="mt-3"></div> <!-- Space added here -->
                        <a href="https://wa.me/6282152161126" 
                            class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 sm:py-1 sm:px-3 rounded-lg hover:bg-blue-700 transition duration-300">
                            Pasang Sekarang
                        </a>
                    </div>
                </div>

                <!-- Paket Ultra -->
                <div data-aos="zoom-in" data-aos-delay="1000" 
                    class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg min-w-[260px] w-full sm:w-72 snap-center mx-2 hover:scale-105 transition-transform duration-500 ease-in-out hover:opacity-90">
                    <img src="img/200.jpg" alt="Paket Ultra" class="w-full h-40 sm:h-32 object-cover rounded-t-xl">
                    <div class="p-4 sm:p-3 text-center">
                        <h3 class="text-xl sm:text-base font-bold text-white mb-2">Dedicated Reguler</h3>
                        <p class="text-white text-lg sm:text-sm font-semibold">Rp<span class="text-white text-xl">Call</span><span class="text-gray-300 text-sm">/bln</span></p>
                        <ul class="mt-3 text-white text-sm sm:text-xs text-left space-y-2">
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Speed 200 Mbps</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Ratio Bandwidth 1:1</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> SLA 99.5%</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> 1 Public IPv4</li>
                            <li class="flex items-center"><i class="text-white fas fa-lightbulb mr-2"></i> Belum Termasuk PPN 12%</li>
                            <li class="flex items-center"><i class="text-white fas fa-phone-alt mr-2"></i> Support 24x7</li>
                        </ul>
                        <div class="mt-3"></div> <!-- Space added here -->
                        <a href="https://wa.me/6282152161126" 
                            class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 sm:py-1 sm:px-3 rounded-lg hover:bg-blue-700 transition duration-300">
                            Pasang Sekarang
                        </a>
                    </div>
                </div>

                <!-- Paket Premium -->
                <div data-aos="zoom-in" data-aos-delay="600" 
                    class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-xl overflow-hidden shadow-lg min-w-[260px] w-full sm:w-72 snap-center mx-2 hover:scale-105 transition-transform duration-500 ease-in-out hover:opacity-90">
                    <img src="img/300.jpg" alt="Paket Premium" class="w-full h-40 sm:h-32 object-cover rounded-t-xl">
                    <div class="p-4 sm:p-3 text-center">
                        <h3 class="text-xl sm:text-base font-bold text-white mb-2">Dedicated Premium</h3>
                        <p class="text-white text-lg sm:text-sm font-semibold">Rp<span class="text-white text-xl">Call</span><span class="text-gray-300 text-sm">/bln</span></p>
                        <ul class="mt-3 text-white text-sm sm:text-xs text-left space-y-2">
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Speed 300 Mbps - 1Gbps</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> Ratio Bandwidth 1:1</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> SLA 99.5%</li>
                            <li class="flex items-center"><i class="text-white fas fa-check-circle mr-2"></i> 1 Public IPv4</li>
                            <li class="flex items-center"><i class="text-white fas fa-lightbulb mr-2"></i> Belum Termasuk PPN 12%</li>
                            <li class="flex items-center"><i class="text-white fas fa-phone-alt mr-2"></i> Support 24x7</li>
                        </ul>
                        <div class="mt-3"></div> <!-- Space added here -->
                        <a href="https://wa.me/6282152161126" 
                            class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 sm:py-1 sm:px-3 rounded-lg hover:bg-blue-700 transition duration-300">
                            Pasang Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add a new section to show Why Us after the product section -->
<section class="pt-16 pb-16 bg-gray-100">
    <div class="container mx-auto text-center px-4 sm:px-2">
        @include('components.whyus')
    </div>
</section>

@include('components.contact')
@endsection
