@extends('layouts.app')

@push('style')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 40px;
    }

    .about-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .about-header h1 {
        font-size: 2.5em;
        margin: 10px 0;
    }

    .about-header p {
        font-size: 1em;
        color: #666;
    }

    .ratings {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }

    .ratings img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 40px;
        gap: 20px;
    }

    .text-item {
        flex: 1 1 45%;
        padding: 10px;
        text-align: justify;
    }

    .text-item h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .text-item p {
        font-size: 1em;
        line-height: 1.6;
        color: #666;
    }

    .text-item ul {
        list-style: none;
        padding: 0;
        margin-top: 10px;
    }

    .text-item ul li {
        display: flex;
        align-items: center;
        margin: 10px 0;
        font-size: 1em;
        color: #333;
    }

    .text-item ul li::before {
        content: "\2713";
        font-size: 1.2em;
        color: #6c63ff;
        margin-right: 10px;
    }

    .image-item {
        flex: 1 1 45%;
        overflow: hidden;
        border-radius: 10px;
        padding: 10px;
    }

    .image-item img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .section {
            flex-direction: column;
            align-items: center;
        }

        .text-item,
        .image-item {
            flex: 1 1 100%;
            padding: 10px 20px;
        }

        .text-item ul li {
            font-size: 0.9em;
        }

        .about-header h1 {
            font-size: 2em;
        }

        .about-header p {
            font-size: 0.9em;
        }
    }
</style>
@endpush

@section('main')
<div class="container">
    <!-- About Header -->
    <div class="about-header animate__animated animate__fadeInDown" data-aos="fade-down">
        <h1>About Us</h1>
    </div>

    <!-- History Section -->
    <section class="section" data-aos="fade-left">
        <div class="text-item">
            <h2>History</h2>
            <p>
                PT. Taska Sarana Nusantara merupakan perusahaan yang dibentuk untuk memanfaatkan peluang di bidang
                teknologi informasi dan komunikasi, khususnya akses internet, infrastruktur jaringan, dan layanan
                berbasis data. Dengan branding TASKA.NET, kami telah mendapatkan izin resmi dari Dirjen Postel untuk
                menyediakan layanan akses internet berkualitas sejak tahun 2024.
            </p>
            <p>
                Berdomisili di Jl. Baru Cisinga, Kp. Langkob Girang Rt. 003 Rw 001, Desa Karangresik, Kecamatan Jamanis,
                Kabupaten Tasikmalaya, Provinsi Jawa Barat (46175).
            </p>
        </div>
        <div class="image-item">
            <img src="img/histori.jpg" alt="Office Image of PT. Taska Sarana Nusantara">
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="section" data-aos="fade-right">
        <div class="image-item">
            <img src="img/misi.jpg" alt="Team Working Together">
        </div>
        <div class="text-item">
            <h2>Vision & Mission</h2>
            <p><strong>Vision:</strong> Memberdayakan organisasi dan individu melalui layanan serta solusi terbaik
                terkait jaringan kabel dan nirkabel.</p>
            <p><strong>Mission:</strong></p>
            <ul>
                <li>Memberikan kualitas layanan terbaik dengan solusi inovatif.</li>
                <li>Berinvestasi dalam infrastruktur dan teknologi informasi terkini.</li>
                <li>Mendukung pelanggan dengan tim profesional dan teknologi modern.</li>
            </ul>
        </div>
    </section>
</div>

<!-- Additional Sections -->
@include('components.team')
@include('components.contact')
@endsection
