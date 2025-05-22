<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="./index.html">RentCar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('beranda') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kontak') }}">Contact</a>
        </li>

        @guest
        <!-- Tampil jika BELUM login -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>

        <!-- Dropdown Register -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarRegister" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarRegister">
            <li><a class="dropdown-item" href="{{ route('registerpenyewa') }}">Sebagai Penyewa</a></li>
            <li><a class="dropdown-item" href="{{ route('registerowner') }}">Sebagai Owner</a></li>
          </ul>
        </li>
        @endguest

        @auth
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
      </li>
    @endauth

      </ul>
    </div>
  </div>
</nav>
