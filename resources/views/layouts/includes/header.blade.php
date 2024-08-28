<header>
    <nav>
        {{-- nav link start --}}
        <a href="{{ route('home') }}">home</a>
        {{-- <a href="{{ route('events') }}">events</a> --}}
        <a href="{{ route('causes') }}">causes</a>
        <a href="{{ route('resources') }}">resources</a>
        {{-- nav link end --}}
    </nav>

    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #555150;">
        <div class="container">
          <a class="navbar-brand" href="#">our jewelry</a>
          <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="d-flex justify-content-start align-items-center">
              <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link px-3" href="{{ route('home') }}">products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="{{ route('events') }}">events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#!">about us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link px-3" href="#!">collaboration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#!">contact us</a>
              </li>
            </ul>

            <ul class="navbar-nav flex-row">
              <li class="nav-item">
                <a class="nav-link pe-3" href="#!">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#!">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-3" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
