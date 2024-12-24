<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
    </style>
</head>

<body>

    <div class="container my-5">
        <section class="py-16 bg-gray-100 animate-on-scroll" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-center text-3xl font-semibold">Our Partners</h2>
            <div class="partners-slider-wrapper mt-10 overflow-hidden relative">
                <div class="partners-slider">
                    <img src="img/TH.png" alt="Partner 1" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/indosat.png" alt="Partner 2" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/FIBERSTAR.png" alt="Partner 3" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/idnic.png" alt="Partner 4" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/rapid.png" alt="Partner 5" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/iforte.png" alt="Partner 6" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/TIS.png" alt="Partner 7" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/apjii.png" alt="Partner 8" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/jkt.png" alt="Partner 9" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <!-- Duplicate logos for seamless scrolling -->
                    <img src="img/TH.png" alt="Partner 1" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/indosat.png" alt="Partner 2" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/FIBERSTAR.png" alt="Partner 3" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/idnic.png" alt="Partner 4" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/rapid.png" alt="Partner 5" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/iforte.png" alt="Partner 6" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/TIS.png" alt="Partner 7" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/apjii.png" alt="Partner 8" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                    <img src="img/jkt.png" alt="Partner 9" class="partner-logo" data-aos="zoom-in" data-aos-duration="800">
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
