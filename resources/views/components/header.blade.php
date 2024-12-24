<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT Taska Sarana Nusantara</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Tambahan styling untuk logo dan nama perusahaan */
    .navbar-brand img {
      height: 50px;
      width: auto;
    }
    .company-name {
      font-size: 1.2rem;
      font-weight: bold;
    }
    .navbar-light .navbar-nav .nav-link {
      color: #000; /* Warna teks navigasi */
    }
    .navbar-light .navbar-nav .nav-link:hover {
      color: #007bff; /* Warna teks saat hover */
    }
    /* Styling khusus untuk tombol Login */
    .nav-link.login-button {
      background-color: #007bff; /* Warna latar belakang biru */
      color: white; /* Warna teks putih */
      padding: 8px 16px; /* Padding untuk menambah jarak dalam tombol */
      border-radius: 5px; /* Membulatkan sudut tombol */
      text-align: center; /* Menjaga teks tetap berada di tengah */
    }
    .nav-link.login-button:hover {
      background-color: #0056b3; /* Warna latar belakang saat hover */
      color: white; /* Warna teks tetap putih */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
      <!-- Logo dan Nama Perusahaan -->
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="img/TSN1.png" alt="Logo" class="me-2">
        <span class="company-name">PT Taska Sarana Nusantara</span>
      </a>
      <!-- Tombol Menu (Burger) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Menu Navigasi -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#package">Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://billing.taskasarananusantara.net">Payment</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link login-button" href="https://billing.taskasarananusantara.net/auth">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
