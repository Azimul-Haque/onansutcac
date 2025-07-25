<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ route('index.index') }}" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('images/logo.png') }}" alt="">
      <h1 class="sitename"><span style="color: #70BE42;">CACTUS</span><span style="color: #08AAE9;">NANO</span></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Singapore</a></li>
          </ul>
        </li>


        • About Us
        • Our Story
        • Vision & Mission
        • Leadership Team
        • Why work with us
        • Production Capacity
        • Global Presence



        <li><a href="{{ route('index.get-about-us') }}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li>
        <li><a href="{{ route('index.products') }}" class="{{ Request::is('products') || Request::is('products/*') ? 'active' : '' }}">Products</a></li>
        <li><a href="{{ route('index.markets') }}" class="{{ Request::is('markets') || Request::is('markets/*') ? 'active' : '' }}">Markets</a></li>
        <li><a href="{{ route('index.regional-offices') }}" class="{{ Request::is('regional-offices') || Request::is('regional-offices/*') ? 'active' : '' }}">Regional Offices</a></li>
        
        <li><a href="{{ route('index.news') }}" class="{{ Request::is('news') || Request::is('news/*') ? 'active' : '' }}">News</a></li>
        <li><a href="{{ route('index.events') }}" class="{{ Request::is('events') || Request::is('events/*') ? 'active' : '' }}">Events</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" href="{{ route('index.get-contact') }}">Contact</a>

  </div>
</header>