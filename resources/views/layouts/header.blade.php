<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ route('index.index') }}" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('images/logo.png') }}" alt="">
      <h1 class="sitename"><span style="color: green;">CACTUS</span><span style="color: blue;">NANO</span></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        {{-- <li><a href="#hero" class="active">Home</a></li> --}}
        <li><a href="{{ route('index.get-about-us') }}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li>
        <li><a href="{{ route('index.products') }}" class="{{ Request::is('products') ? 'active' : '' }}">Products</a></li>
        <li><a href="#portfolio">Markets</a></li>
        <li class="dropdown"><a href="#"><span>Regional Offices</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">USA</a></li>
            <li><a href="#">Singapore</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li> --}}
            {{-- <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li> --}}
          </ul>
        </li>
        <li><a href="#contact">Events</a></li>
        <li><a href="#contact">Newsroom</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" href="{{ route('index.get-contact') }}">Contact</a>

  </div>
</header>