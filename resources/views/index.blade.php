@extends('layouts.app')

@section('main')
@include('components.popup')

<!-- Banner Area -->
<section class="position-relative vh-100 bg-cover bg-center" style="background-image: url('img/kim.jpg');">
    <div class="position-absolute inset-0 bg-black bg-opacity-40 d-flex flex-column justify-content-center align-items-center text-white text-center px-4" data-aos="fade-up">
        <h1 class="display-4 fw-bold text-white text-center">
            Welcome To <br>PT Taska Sarana Nusantara
        </h1>
        <p class="mt-4 fs-5 mx-auto" style="max-width: 800px;">
            Your gateway to lightning-fast internet and unparalleled connectivity.
        </p>
        <a href="https://wa.me/6282152161126" class="mt-4 btn btn-lg btn-primary px-5 py-3 rounded-lg shadow-lg hover-shadow-sm">
            Get Connected
        </a>
    </div>
</section>

@include('components.services')
@include('components.whyus')
@include('components.faq')
@include('components.partners')
@include('components.contact')
@endsection
