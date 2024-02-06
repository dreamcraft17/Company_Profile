<style>
  .menu-active {
    color: black !important;
    font-weight: bold;
  }

  .logo-banner {
    width: 50px;
    /* Adjust the width as needed */
    height: 50px;
    /* Maintains aspect ratio */
  }
</style>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-secondary">
    <div class="container">
      <a class="nav-link {{Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
        <img src="/img/logo.png" class="logo-banner" alt="">
      </a>
      <a class="navbar-brand" href="/">PT.SOHOU KIKAKU INDONESIA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link {{Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('about') ? 'active' : '' }}" href="/about">About us</a>
          </li>

          <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('about', 'structure') ? 'active' : '' }}"
                    data-bs-toggle="dropdown">PROFIL</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="/about" class="dropdown-item">About Us</a>
                    <a href="/structure" class="dropdown-item">Struktur Organisasi</a>
                </div>
            </div>
          <li class="nav-item">
            <a class="nav-link {{Request::is('product') ? 'active' : '' }}" href="/product">Product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('customer') ? 'active' : '' }}" href="/customer">Customer Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('career') ? 'active' : '' }}" href="/career">Careers</a>
          </li>


        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit"><i class="fas fa-magnifying-glass"></i></button>
        </form>
      </div>

    </div>
  </nav>
</header>