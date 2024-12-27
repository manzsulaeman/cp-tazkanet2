<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<section id="contact" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="text-muted">
                We’d love to hear from you! Reach out to us for any inquiries or feedback.
            </p>
        </div>

        <div class="row g-4">
            <!-- Form Section -->
            <div class="col-lg-6">
                <form action="mailto:helpdesk@taskasarananusantara.net" method="post" enctype="text/plain" class="bg-white shadow p-4 rounded">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">E-mail</label>
                        <input type="email" id="mail" name="mail" class="form-control" placeholder="Your E-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea id="comment" name="comment" rows="4" class="form-control" placeholder="Your Comment" required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>

            <!-- Map and Contact Info Section -->
            <div class="col-lg-6">
                <div class="mb-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63375.24468649255!2d108.1448395!3d-7.1832448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4ff3220dbaff%3A0x1ad43633b02a25c6!2sTazka%20Net!5e0!3m2!1sen!2sid!4v1697111116040!5m2!1sen!2sid" 
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold">Our Address</h5>
                    <p class="text-muted mb-1">Kp Langkob Girang RT.003 RW.001, Karangresik,</p>
                    <p class="text-muted mb-1">Kec. Jamanis, Kabupaten Tasikmalaya, Jawa Barat 46175</p>
                    <p class="text-muted mb-1"><strong>Phone:</strong> <a href="tel:+6282152161126" class="text-decoration-none">0821-5216-1126</a></p>
                    <p class="text-muted mb-1"><strong>Email:</strong> <a href="mailto:helpdesk@taskasarananusantara.net" class="text-decoration-none">helpdesk@taskasarananusantara.net</a></p>
                    <p class="text-muted"><i class="far fa-clock me-2"></i><strong>Open Hours:</strong> Monday - Saturday, 08:00 - 16:00</p>
                </div>

                <div class="d-flex justify-content-start gap-3">
                    <a href="https://www.facebook.com/share/1Ak2puXMb9/?mibextid=LQQJ4d" target="_blank" class="text-primary">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="http://www.tiktok.com/@ibudz.tech" target="_blank" class="text-dark">
                        <i class="fab fa-tiktok fa-2x"></i>
                    </a>
                    <a href="https://instagram.com/yourcompany" target="_blank" class="text-danger">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://wa.me/6282152161126" target="_blank" class="text-success">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
