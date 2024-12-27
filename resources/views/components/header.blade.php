<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
  <div class="container">
    <!-- Logo dan Nama Perusahaan -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="img/TSN1.png" alt="Logo" class="h-8">
      <span class="ms-2 fw-bold text-gray-800">PT Taska Sarana Nusantara</span>
    </a>

    <!-- Tombol Menu (Burger) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-gray-800" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-800" href="/about">About Us</a>
        </li>

        <!-- Dropdown Menu untuk Package -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-gray-800" href="#package" id="navbarDropdownPackage" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Package
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownPackage">
            <li><a class="dropdown-item" href="/dedicated">Internet Dedicated</a></li>
            <li><a class="dropdown-item" href="/soho">Internet SOHO</a></li>
            <li><a class="dropdown-item" href="/package">Internet Broadband</a></li>
          </ul>
        </li>

        <!-- Dropdown Menu untuk Tools -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-gray-800" href="#tools" id="navbarDropdownTools" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tools
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownTools">
            <li><a class="dropdown-item" href="https://taska.speedtestcustom.com/">Speedtest</a></li>
            <li><a class="dropdown-item" href="https://bgp.he.net/AS152775">BGP Maps</a></li>
            <li><a class="dropdown-item" href="https://lg.taskasarananusantara.net/">Looking Glass</a></li>
            <li><a class="dropdown-item" href="https://www.peeringdb.com/net/36679">PeeringDB</a></li>
            <li><a class="dropdown-item" href="https://zabbix.taskasarananusantara.net/">MRTG</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-gray-800" href="http://billing.taskasarananusantara.net">Payment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-800" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary text-white px-4 py-2" href="https://billing.taskasarananusantara.net/auth">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
