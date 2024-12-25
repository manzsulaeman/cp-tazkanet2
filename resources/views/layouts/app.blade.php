<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="TSN1/png" href="{{ asset('img/TSN1.png') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('style')

    <!-- AOS (Animate On Scroll) CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .faq-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }
        .faq-header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .faq-container {
            margin-top: 30px;
        }
        .faq-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 16px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }
        .faq-item.active .faq-answer {
            display: block;
        }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            margin-right: 16px;
            color: #555;
        }
        .faq-content {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .faq-question {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .faq-answer {
            display: none;
            color: #555;
        }
        @media (max-width: 600px) {
            .faq-section {
                padding: 10px;
            }
            .faq-header {
                font-size: 20px;
            }
        }
        /* Hover animation */
        .card {
            transition: transform 0.3s ease-in-out;
            width: 100%;
        }

        .card:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        /* Click animation */
        .card:active {
            transform: scale(0.95);
        }

        /* Optional: Add a subtle shadow on hover for a 3D effect */
        .card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Ensure all cards and content are uniform */
        .card {
            height: 100%;
        }

        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-title.full-width {
            white-space: normal;
        }

        /* Carousel styling */
        .carousel-item img {
            max-height: 300px;
            object-fit: cover;
        }

        .partner-logo {
            margin: 0 20px;
            max-width: 150px;
        }

        .partners-slider {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            white-space: nowrap;
            animation: scroll 10s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Tambahan styling untuk logo dan nama perusahaan */
        .navbar-brand img {
            height: 50px;
            width: auto;
        }

        .company-name {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #000;
            /* Warna teks navigasi */
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #007bff;
            /* Warna teks saat hover */
        }

        /* Styling khusus untuk tombol Login */
        .nav-link.login-button {
            background-color: #007bff;
            /* Warna latar belakang biru */
            color: white;
            /* Warna teks putih */
            padding: 8px 16px;
            /* Padding untuk menambah jarak dalam tombol */
            border-radius: 5px;
            /* Membulatkan sudut tombol */
            text-align: center;
            /* Menjaga teks tetap berada di tengah */
        }

        .nav-link.login-button:hover {
            background-color: #0056b3;
            /* Warna latar belakang saat hover */
            color: white;
            /* Warna teks tetap putih */
        }
    </style>

    <!-- FONTS GOOGLE -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Header -->
            @include('components.header')

            <!-- Sidebar -->

            <!-- Content -->
            @yield('main')

            <!-- Footer -->
            @include('components.footer')
        </div>
    </div>

    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000, // Duration of animations in milliseconds
                once: true, // Whether the animation should only happen once
            });
        });
        document.addEventListener("DOMContentLoaded", () => {
            const promoPopup = document.getElementById('promoPopup');
            const closePopup = document.getElementById('closePopup');

            if (promoPopup && closePopup) {
                // Event untuk tombol close
                closePopup.addEventListener('click', () => {
                    promoPopup.style.display = 'none';
                });

                // Auto close setelah 5 detik
                setTimeout(() => {
                    promoPopup.style.display = 'none';
                }, 5000);
            } else {
                console.error('Popup atau tombol close tidak ditemukan!');
            }
        });
        const carouselImages = document.getElementById('carouselImages');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        let currentIndex = 0;
        const totalImages = carouselImages.children.length;

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carouselImages.style.transform = `translateX(${offset}%)`;
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            updateCarousel();
        }

        function showPreviousImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateCarousel();
        }

        nextButton.addEventListener('click', showNextImage);
        prevButton.addEventListener('click', showPreviousImage);

        setInterval(showNextImage, 5000);

        function cardClicked(card) {
            card.classList.add('clicked');
            setTimeout(function() {
                card.classList.remove('clicked');
            }, 300); // Animation lasts for 300ms
        }
    </script>

    @stack('scripts')

</body>

</html>
