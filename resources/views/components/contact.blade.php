<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <section id="contact" class="py-16" data-aos="fade-up">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-4" data-aos="fade-up">Contact Us</h2>
            <p class="text-gray-600 text-center mb-12" data-aos="fade-up">We’d love to hear from you! Reach out to us for any inquiries or feedback.</p>

            <div class="flex flex-col lg:flex-row items-start lg:items-stretch justify-between space-y-8 lg:space-y-0 lg:space-x-12">
                <!-- Form Section -->
                <form action="send_email.php" method="POST" class="w-full lg:w-1/2 bg-white shadow-md rounded-lg p-8" data-aos="fade-right">
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-3" placeholder="Your Name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-3" placeholder="Your Email" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-3" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-600 transition-transform transform hover:scale-105">Send Message</button>
                </form>

                <!-- Map and Contact Info Section -->
                <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-left">
                    <!-- Google Maps -->
                    <div class="w-full h-64 lg:h-80 rounded-lg overflow-hidden shadow-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63375.24468649255!2d108.1448395!3d-7.1832448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4ff3220dbaff%3A0x1ad43633b02a25c6!2sTazka%20Net!5e0!3m2!1sen!2sid!4v1697111116040!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <!-- Address and Contact Info -->
                    <div class="text-left lg:text-left" data-aos="fade-up">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Our Address</h3>
                        <p class="text-gray-600">Kp Langkob Girang RT.003 RW.001, Karangresik,</p>
                        <p class="text-gray-600">Kec. Jamanis, Kabupaten Tasikmalaya, Jawa Barat 46175</p>
                        <p class="text-gray-600 mt-4"><strong>Phone:</strong> <a href="tel:+6282152161126" class="text-blue-500 hover:underline">0821-5216-1126</a></p>
                        <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:helpdesk@taskasarananusantara.net" class="text-blue-500 hover:underline">helpdesk@taskasarananusantara.net</a></p>
                        <p class="text-gray-600 mt-4"><i class="far fa-clock text-black-500"></i> <strong>Open Hours:</strong> Monday - Saturday, 08:00 - 16:00</p>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="flex justify-center lg:justify-start space-x-6" data-aos="fade-up">
                        <a href="https://www.facebook.com/share/1Ak2puXMb9/?mibextid=LQQJ4d" target="_blank" class="text-blue-600 hover:text-blue-800">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="http://www.tiktok.com/@ibudz.tech" target="_blank" class="text-black hover:text-gray-600">
                            <i class="fab fa-tiktok fa-2x"></i>
                        </a>
                        <a href="https://instagram.com/yourcompany" target="_blank" class="text-pink-500 hover:text-pink-700">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://wa.me/6282152161126" target="_blank" class="text-green-500 hover:text-green-700">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Initialization -->
    <script>
        AOS.init();
    </script>
</body>

</html>
