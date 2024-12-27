<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Override for text alignment on smaller screens */
    @media (max-width: 1024px) {
      .lg\:text-left {
        text-align: left; /* Forces left alignment */
      }
    }
  </style>
</head>
<body>

  <!-- About Us Section -->
  <section class="bg-cover bg-center py-16" style="background-image: url('img/gg.jpg');">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center px-6 lg:px-20">
      
      <!-- Left Column -->
      <div data-aos="fade-right" class="text-center lg:text-left">
        <h1 class="text-4xl font-extrabold text-gray-900">About Us</h1>
        <div class="w-20 h-1 bg-blue-500 mt-4 mb-6 mx-auto lg:mx-0"></div>
        <p class="text-gray-700 text-lg leading-relaxed">
          PT. Taska Sarana Nusantara merupakan suatu perusahaan yang dibentuk guna memanfaatkan peluang
          dalam bidang teknologi informasi dan komunikasi, khususnya akses internet, infrastruktur
          jaringan, layanan berbasis komunikasi data serta pengembangan aplikasi.
        </p>
        <a href="{{ url('/about') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600 transition">
          Selengkapnya
        </a>
      </div>

      <!-- Right Column -->
      <div class="w-full flex justify-center lg:justify-end" data-aos="fade-left">
        <img src="img/1.png" alt="Deskripsi Gambar" class="w-full max-w-xs lg:max-w-full h-auto object-cover">
      </div>
    </div>
  </section>

<!-- Features Section -->
<section class="py-16 bg-gray-100" id="package">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-800">Outstanding Service</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-10">
      
      <!-- Internet Broadband -->
      <div data-aos="fade-up" class="service-box">
        <div class="image-wrapper">
          <img src="/img/a.jpg" alt="Internet Broadband" class="w-full h-full object-cover">
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800">Internet Broadband</h3>
          <p class="mt-2 text-gray-600 text-justify">
            Internet broadband adalah jenis koneksi internet yang mana kecepatannya dibagi rata
            sesuai jumlah pengguna atau padatnya penggunaan internet.
          </p>
        </div>
      </div>

      <!-- Internet SOHO -->
      <div data-aos="fade-up" data-aos-delay="200" class="service-box">
        <div class="image-wrapper">
          <img src="/img/soho.jpg" alt="Internet SOHO" class="w-full h-full object-cover">
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800">Internet SOHO</h3>
          <p class="mt-2 text-gray-600 text-justify">
              Layanan internet untuk bisnis kecil atau rumahan, dengan koneksi stabil dan fitur keamanan, cocok untuk aktivitas kerja seperti email dan video konferensi.
          </p>
        </div>
      </div>

      <!-- Internet Dedicated -->
      <div data-aos="fade-up" data-aos-delay="400" class="service-box">
        <div class="image-wrapper">
          <img src="/img/b.jpg" alt="Internet Dedicated" class="w-full h-full object-cover">
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800">Internet Dedicated</h3>
          <p class="mt-2 text-gray-600 text-justify">
            Internet dedicated merupakan jenis jaringan yang memiliki rasio bandwidth 1:1 yang
            memiliki arti bahwa bandwidth yang Anda gunakan tidak terbagi dengan user lain.
          </p>
        </div>
      </div>

      <!-- IT Consultant -->
      <div data-aos="fade-up" data-aos-delay="600" class="service-box">
        <div class="image-wrapper">
          <img src="/img/it.jpg" alt="IT Consultant" class="w-full h-full object-cover">
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800">IT Consultant</h3>
          <p class="mt-2 text-gray-600 text-justify">
            Seorang Konsultan IT memberikan saran ahli tentang penggunaan teknologi, menganalisis
            infrastruktur, dan merekomendasikan solusi praktis untuk mencapai tujuan bisnis.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  /* Base Styling */
  .service-box {
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease;
  }

  .service-box:hover {
    transform: scale(1.05); /* Efek zoom ringan */
    opacity: 0.95;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
  }

  /* Image Wrapper */
  .image-wrapper {
    width: 100%;
    aspect-ratio: 16 / 9; /* Proporsi gambar tetap (16:9) */
    overflow: hidden;
    border-bottom: 1px solid #ddd;
  }

  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Responsive Adjustments */
  @media (max-width: 640px) {
    .grid {
      grid-template-columns: repeat(2, 1fr); /* 2 kolom di mobile */
      gap: 8px; /* Kurangi jarak antar elemen */
    }

    .service-box {
      padding: 0.5rem; /* Kurangi padding di dalam box */
    }

    .service-box h3 {
      font-size: 1rem; /* Perkecil ukuran heading */
    }

    .service-box p {
      font-size: 0.875rem; /* Perkecil ukuran teks */
    }
  }
</style>
