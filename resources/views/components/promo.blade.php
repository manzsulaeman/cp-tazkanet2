
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

