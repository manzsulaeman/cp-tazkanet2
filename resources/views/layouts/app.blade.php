<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/TSN1.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

        /* Logo Styling */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            padding: 10px;
        }

        .logo {
            max-width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .logo {
                max-width: 120px; /* Smaller size for mobile */
            }
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

        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-title.full-width {
            white-space: normal;
        }

        .carousel-item img {
            max-height: 300px;
            object-fit: cover;
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
            <!-- Sidebar content can be included here -->

            <!-- Content -->
            @yield('main')

            <!-- Footer -->
            @include('components.footer')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

        // Handle dropdown toggle
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();

                    const menu = this.nextElementSibling;
                    if (menu.classList.contains('d-none')) {
                        menu.classList.remove('d-none');
                    } else {
                        menu.classList.add('d-none');
                    }
                });
            });

            document.addEventListener('click', function (e) {
                const target = e.target;
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (!menu.contains(target) && !menu.previousElementSibling.contains(target)) {
                        menu.classList.add('d-none');
                    }
                });
            });
        });

        // Carousel control
        const carouselImages = document.getElementById('carouselImages');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        let currentIndex = 0;
        const totalImages = carouselImages?.children?.length || 0;

        function updateCarousel() {
            if (carouselImages) {
                const offset = -currentIndex * 100;
                carouselImages.style.transform = `translateX(${offset}%)`;
            }
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            updateCarousel();
        }

        function showPreviousImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateCarousel();
        }

        if (nextButton && prevButton) {
            nextButton.addEventListener('click', showNextImage);
            prevButton.addEventListener('click', showPreviousImage);
        }

        setInterval(showNextImage, 5000);

    </script>

    @stack('scripts')

</body>

</html>
