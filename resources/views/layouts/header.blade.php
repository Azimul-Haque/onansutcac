<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ route('index.index') }}" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('images/logo.png') }}" alt="">
      <h1 class="sitename"><span style="color: #70BE42;">CACTUS</span><span style="color: #08AAE9;">NANO</span></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>

        <li><a href="{{ route('about-us') }}" class="{{ Request::is('about-us') || Request::is('products/*') ? 'active' : '' }}">Products</a></li>

        
        <li class="dropdown"><a href="#" class="{{ Request::is('about-us') || Request::is('about-us#our-story') || Request::is('about-us#vission-mission') || Request::is('about-us#team') || Request::is('about-us#our-story') ? 'active' : '' }}"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('index.get-about-us') }}">About Us</a></li>
            <li><a href="{{ route('index.get-about-us') }}#our-story">Our Story</a></li>
            <li><a href="{{ route('index.get-about-us') }}#vission-mission">Vision & Mission</a></li>
            <li><a href="{{ route('index.get-about-us') }}#team">Leadership Team</a></li>
            <li><a href="{{ route('index.get-why-work-with-us') }}">Why work with us</a></li>
            <li><a href="{{ route('index.get-why-work-with-us') }}#product-capacity">Production Capacity</a></li>
            <li><a href="{{ route('index.get-why-work-with-us') }}#global-presence">Global Presence</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Technologies</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            @foreach($productsforfooter as $product)
              @if($product->type == 2)
                 <li><a href="{{ route('index.singleproduct', $product->slug) }}">{{ $product->title }}</a></li>
              @endif
            @endforeach
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            @foreach($productsforfooter as $product)
              @if($product->type == 1)
                 <li><a href="{{ route('index.singleproduct', $product->slug) }}">{{ $product->title }}</a></li>
              @endif
            @endforeach
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Industries</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            @foreach($marketsforfooter as $market)
              @if($market->type == 1)
                 <li><a href="{{ route('index.singlemarket', $market->slug) }}">{{ $market->title }}</a></li>
              @endif
            @endforeach
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            @foreach($marketsforfooter as $market)
              @if($market->type == 2)
                 <li><a href="{{ route('index.singlemarket', $market->slug) }}">{{ $market->title }}</a></li>
              @endif
            @endforeach
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Sustainability</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#!">SDG Alignment</a></li>
            <li><a href="#!">Social Impact</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Contact</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('index.get-contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Get in Touch</a></li>
            <li><a href="{{ route('index.regional-offices') }}" class="{{ Request::is('regional-offices') || Request::is('regional-offices/*') ? 'active' : '' }}">Global Offices</a></li>
            <li><a href="{{ route('index.news') }}" class="{{ Request::is('news') || Request::is('news/*') ? 'active' : '' }}">Media & Press</a></li>
            <li><a href="{{ route('index.events') }}" class="{{ Request::is('events') || Request::is('events/*') ? 'active' : '' }}">Events</a></li>
            <li><a href="#!">Request a Proposal</a></li>
          </ul>
        </li>

        
        {{-- <li><a href="{{ route('index.markets') }}" class="{{ Request::is('markets') || Request::is('markets/*') ? 'active' : '' }}">Markets</a></li> --}}
        
        
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" href="{{ route('index.get-contact') }}">Contact</a>

  </div>
</header>