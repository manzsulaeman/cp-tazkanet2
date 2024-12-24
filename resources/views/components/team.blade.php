<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
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
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Our Team</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4 justify-content-center">
            <!-- Anggota Tim 1 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/dede.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Dede Sukandar" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Dede Sukandar</h5>
                        <p class="text-muted mb-0">President Director</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 2 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/ims.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Imas Masitoh" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Imas Masitoh</h5>
                        <p class="text-muted mb-0">Commissioner</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 3 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/budi.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Budi" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Budi</h5>
                        <p class="text-muted mb-0">Director</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 4 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/luna.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Muhamad Fathu Rizki" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Muhamad Fathu Rizki</h5>
                        <p class="text-muted mb-0">Finance</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 5 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/siti.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Neng Siti Fadillah" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Neng Siti Fadillah Ramadhan</h5>
                        <p class="text-muted mb-0">Administration</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 6 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/adam.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Adam Praja" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Adam Praja</h5>
                        <p class="text-muted mb-0">Technician</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 7 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/joe.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Rizky Ramdhan" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Rizky Ramdhan</h5>
                        <p class="text-muted mb-0">Technician</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 8 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/agung.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Agung Priadi" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Agung Priadi</h5>
                        <p class="text-muted mb-0">Technician</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 9 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/samsul.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Samsul Rizal" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Samsul Rizal</h5>
                        <p class="text-muted mb-0">Technician</p>
                    </div>
                </div>
            </div>
            <!-- Anggota Tim 10 -->
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                <div class="card text-center shadow-sm" onclick="cardClicked(this)">
                    <img src="img/daden.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Refaldy Daden" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title full-width">Refaldy Daden</h5>
                        <p class="text-muted mb-0">Technician</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();

        // Function to handle card click animation
        function cardClicked(card) {
            card.classList.add('clicked');
            setTimeout(function() {
                card.classList.remove('clicked');
            }, 300); // Animation lasts for 300ms
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
