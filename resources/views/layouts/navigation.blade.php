
<header>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top  navbarHeader " style="background-color: #DA0037 ">
    <div class="container-fluid">
      <a class="navbar-brand fs-4" href="/"><b>TRISULA FC</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 ">
          <li class="nav-item p-3 ">
          <a class="nav-link{{ request()->is('/') ? ' active': ''  }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link{{ request()->is('pertandingan') ? ' active': ''  }}" href="/pertandingan">Pertandingan</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link{{ request()->is('berita') ? ' active': ''  }}" href="/berita">Berita</a>
          </li>        
          <li class="nav-item p-3">
            <a class="nav-link{{ request()->is('galeri') ? ' active': ''  }}" href="/galeri">Galeri</a>
          </li>        
          <li class="nav-item p-3">
            <a class="nav-link{{ request()->is('about') ? ' active': ''  }}" href="/about">About</a>
          </li>        
          <li class="nav-item p-3">
            <a class="nav-link{{ request()->is('contact') ? ' active': ''  }}" href="/contact">Contact</a>
          </li>
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
</header>

