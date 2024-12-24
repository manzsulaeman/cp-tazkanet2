@include('popup')
@include('header')
<style>
    /* Menambahkan tinggi besar pada banner */
.banner-area {
    height: 80vh;  /* Menetapkan tinggi banner menjadi 80% dari tinggi viewport */
}

/* Menambahkan margin agar konten about us berada di bawah */
.section-gap {
    margin-top: 50px; /* Memberikan ruang antara banner dan konten About Us */
}

</style>
<section class="banner-area">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
                <img src="img/taska2.jpg" class="d-block w-200" alt="Modern Living Spaces">
                <div class="carousel-caption">
                    <h1>Modern Living Spaces</h1>
                    <p>Explore beautifully designed homes tailored for your lifestyle.</p>
                </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <img src="img/taska.jpg" class="d-block w-200" alt="Your Dream Home Awaits">
                <div class="carousel-caption">
                    <h1>Your Dream Home Awaits</h1>
                    <p>Let us help you find the home you've always dreamed of.</p>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>

<!-- End Dashboard banner -->
<section class="section-gap mt-3 mb-3"
    style="background: url('img/gg.jpg') no-repeat center center / cover; position: relative; filter: brightness(110%);">
    <div class="container-fluid" style="position: relative; z-index: 1;">
        <div class="about">
            <!-- single features -->
            <div class="row align-items-center">
                <!-- Kolom Kiri -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-5 py-5">
                    <h1>About Us</h1>
                    <div
                        style="width: 10%; height: 2px; background-color: black; margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <p style="max-width: 400px; text-align: justify;">
                        PT. Taska Sarana Nusantara merupakan suatu perusahaan yang dibentuk guna memanfaatkan peluang
                        dalam bidang teknologi informasi dan komunikasi, khususnya akses internet, infrastruktur
                        jaringan, layanan berbasis komunikasi data serta pengembangan aplikasi.
                    </p>
                    <a href="{{ url('/about') }}" class="btn btn-primary mt-3">Selengkapnya</a>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div
                        style="width: 100%; max-width: 600px; height: 300px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <img src="img/2775.jpg" alt="Deskripsi Gambar" class="img-fluid"
                            style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('package')
@include('faq')
@include('partners')
@include('contact')
@include('footer')
