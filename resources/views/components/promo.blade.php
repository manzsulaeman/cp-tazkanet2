@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-gray-800">
    <!-- Carousel Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="carousel" id="carousel">
                <div class="carousel-images" id="carouselImages">
                    <!-- Gambar carousel diambil dari database -->
                    @foreach ($promos as $promo)
                        <img src="{{ asset('storage/' . $promo->image) }}" alt="{{ $promo->title }}">
                    @endforeach
                </div>
                <div class="carousel-buttons">
                    <button class="carousel-button" id="prevButton">&#9664;</button>
                    <button class="carousel-button" id="nextButton">&#9654;</button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
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
</script>
@endsection
