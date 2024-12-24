<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .faq-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }
        .faq-header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .faq-container {
            margin-top: 30px;
        }
        .faq-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 16px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }
        .faq-item.active .faq-answer {
            display: block;
        }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            margin-right: 16px;
            color: #555;
        }
        .faq-content {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .faq-question {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .faq-answer {
            display: none;
            color: #555;
        }
        @media (max-width: 600px) {
            .faq-section {
                padding: 10px;
            }
            .faq-header {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="faq-section" data-aos="fade-up">
        <h2 class="faq-header">Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-content">
                    <div class="faq-question">Apakah kecepatan Taska Home akan selalu konstan setiap saat?</div>
                    <div class="faq-answer">Layanan Internet Taska Home bersifat "sharing" dan "up-to". Namun kecepatan dan performa Internet Taska Home dapat digunakan dengan optimal sepanjang hari.</div>
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-content">
                    <div class="faq-question">Apakah Taska Home menerapkan FUP pada seluruh paket layanan?</div>
                    <div class="faq-answer">Taska Home tidak menerapkan FUP pada seluruh paket layanan, sehingga pelanggan dapat mengakses internet super cepat tanpa batas.</div>
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-content">
                    <div class="faq-question">Dimana saja saya dapat melakukan pembayaran Taska Home?</div>
                    <div class="faq-answer">Kamu dapat memilih metode pembayaran yang paling mudah untuk kamu.</div>
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <div class="faq-content">
                    <div class="faq-question">Kapan saya harus membayar biaya instalasi?</div>
                    <div class="faq-answer">Biaya instalasi akan ditagihkan setelah pemasangan selesai.</div>
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <div class="faq-content">
                    <div class="faq-question">Kapan saya harus membayar tagihan?</div>
                    <div class="faq-answer">Untuk biaya bulanan ditagihkan setiap tanggal pemasangan di setiap bulannya.</div>
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <div class="faq-content">
                    <div class="faq-question">Apakah layanan Taska Home dapat digunakan untuk bisnis dan perusahaan?</div>
                    <div class="faq-answer">Layanan Taska Home hanya ditujukan untuk penggunaan individu, dengan syarat dan kondisi sebagai berikut: Pelanggan individu yang menggunakan layanan ini tetapi pembayaran dilakukan oleh perusahaan dimana pelanggan bekerja diperbolehkan, namun pelanggan harus mengirimkan nama lengkap perusahaan dan salinan NPWP perusahaan untuk keperluan divisi Inside Sales dan Divisi Keuangan Taska dalam hal kebutuhan pajak. Pelanggan yang menggunakan layanan untuk keperluan perusahaan disarankan tidak menggunakan layanan Taska Home, karena layanan Taska Home tidak dapat mengeluarkan invoice fisik atau bukti bayar yang setara dengan faktur pajak. Pelanggan dapat menggunakan layanan Taska Bisnis untuk keperluan perusahaan UKM.</div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                faqItems.forEach(i => i.classList.remove('active'));
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
