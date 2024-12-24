<div class="popup" id="promoPopup">
    <div class="popup-content">
        <button class="popup-close" id="closePopup">&times;</button>
        <img src="/img/popup.png" alt="Promo Image">
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const promoPopup = document.getElementById('promoPopup');
        const closePopup = document.getElementById('closePopup');

        if (promoPopup && closePopup) {
            // Event untuk tombol close
            closePopup.addEventListener('click', () => {
                promoPopup.style.display = 'none';
            });

            // Auto close setelah 5 detik
            setTimeout(() => {
                promoPopup.style.display = 'none';
            }, 5000);
        } else {
            console.error('Popup atau tombol close tidak ditemukan!');
        }
    });
</script>
