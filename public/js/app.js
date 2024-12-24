document.addEventListener("DOMContentLoaded", () => {
  // Popup Logic
  const promoPopup = document.getElementById('promoPopup');
  const closePopup = document.getElementById('closePopup');

  if (promoPopup && closePopup) {
      closePopup.addEventListener('click', () => {
          promoPopup.style.display = 'none';
      });

      setTimeout(() => {
          promoPopup.style.display = 'none';
      }, 5000);
  } else {
      console.error('Popup atau tombol close tidak ditemukan!');
  }

  // Menu Toggle Logic
  const menuToggle = document.getElementById("menuToggle");
  const menuItems = document.getElementById("menuItems");

  if (menuToggle && menuItems) {
      menuToggle.addEventListener("click", () => {
          menuItems.classList.toggle("hidden");
      });
  }

  // Carousel Logic
  const carouselImages = document.getElementById('carouselImages');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');

  if (carouselImages && prevButton && nextButton) {
      let currentIndex = 0;
      const totalImages = carouselImages.children.length;

      function updateCarousel() {
          const offset = -currentIndex * 100; // Hitung posisi (persen)
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
  }

  // FAQ Toggle Logic
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      if (question) {
          question.addEventListener('click', () => {
              const answer = item.querySelector('.faq-answer');
              if (answer) {
                  answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
              }
          });
      }
  });
});