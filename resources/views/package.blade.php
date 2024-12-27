@extends('layouts.app')

@section('main')

<!-- Product Section -->
<section class="py-5 bg-light" style="background-image: url('/img/gg.jpg'); background-size: cover; background-position: center;">
    <div class="container text-center">
        <h2 class="display-4 text-dark" data-aos="fade-up" data-aos-duration="1000">Internet Broadband</h2>
        <p class="text-secondary mb-4" data-aos="fade-up" data-aos-duration="1200">Choose the home package that suits you.</p>

        <!-- Packages container -->
        <div class="row g-4">
            <!-- Paket Hemat -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-lg border-0 hover-shadow">
                    <img src="img/10.jpg" class="card-img-top rounded-top" alt="Paket Hemat">
                    <div class="card-body text-white bg-primary-gradient">
                        <h5 class="card-title">Paket Hemat</h5>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold">Rp. 150K</span>
                            <span class="badge bg-light text-primary">Up to 10 Mbps</span>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li><i class="bi bi-check-circle"></i> Unlimited Kuota</li>
                            <li><i class="bi bi-check-circle"></i> Ideal 1-3 Device</li>
                            <li><i class="bi bi-check-circle"></i> Termasuk PPN 12%</li>
                        </ul>
                        <a href="https://wa.me/6282152161126" class="btn btn-primary w-100">Pasang Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Paket Ekonomis -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-lg border-0 hover-shadow">
                    <img src="img/15.jpg" class="card-img-top rounded-top" alt="Paket Ekonomis">
                    <div class="card-body text-white bg-primary-gradient">
                        <h5 class="card-title">Paket Ekonomis</h5>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold">Rp. 183K</span>
                            <span class="badge bg-light text-primary">Up to 15 Mbps</span>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li><i class="bi bi-check-circle"></i> Unlimited Kuota</li>
                            <li><i class="bi bi-check-circle"></i> Ideal 1-4 Device</li>
                            <li><i class="bi bi-check-circle"></i> Termasuk PPN 12%</li>
                        </ul>
                        <a href="https://wa.me/6282152161126" class="btn btn-primary w-100">Pasang Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Paket Standar -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-lg border-0 hover-shadow">
                    <img src="img/20.jpg" class="card-img-top rounded-top" alt="Paket Standar">
                    <div class="card-body text-white bg-primary-gradient">
                        <h5 class="card-title">Paket Standar</h5>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold">Rp. 250K</span>
                            <span class="badge bg-light text-primary">Up to 20 Mbps</span>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li><i class="bi bi-check-circle"></i> Unlimited Kuota</li>
                            <li><i class="bi bi-check-circle"></i> Ideal 1-6 Device</li>
                            <li><i class="bi bi-check-circle"></i> Termasuk PPN 12%</li>
                        </ul>
                        <a href="https://wa.me/6282152161126" class="btn btn-primary w-100">Pasang Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section class="py-5 bg-light">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
        @include('components.whyus')
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    @include('components.contact')
</section>

@endsection

@push('styles')
<style>
    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .hover-shadow {
        transition: box-shadow 0.3s ease-in-out;
    }

    .hover-shadow:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-primary {
        color: white !important;
        border-color: #007bff;
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush
