<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title>@yield('title') | CactusNANO</title>
  <meta name="description" content="Cactus Nano develops powerful, long-lasting antimicrobial, antifouling technology for applications in water filters, water storage and distribution systems, and consumer products." />

  <link rel="canonical" href="{{ url('/') }}" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Cactus Nano - High trust U.S.-made semiconductors for the next generation AI photonic platform and power" />
  <meta property="og:description" content="Cactus Nano develops powerful, long-lasting antimicrobial, antifouling technology for applications in water filters, water storage and distribution systems, and consumer products." />
  <meta property="og:url" content="{{ url('/') }}" />
  <meta property="og:site_name" content="Gradiant" />
  <meta property="og:canonical" content="{{ url('/') }}" />
  <meta property="og:image" content="{{ asset('images/cactusnano-nano-tech-onnocation.png') }}" />
  <meta property="og:image:width" content="1025" />
  <meta property="og:image:height" content="542" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:alt" content="cactusnano-nano-tech-onnocation.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="author" content="A. H. M. Azimul Haque">

  <!-- Structured data JSON-LD (optional but highly recommended) -->
  <script type="application/ld+json">
      {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "CactusNANO",
      "description": "{{ $blog->description ?? mb_substr(strip_tags($blog->body), 0, 200) }}",
      "image": "{{ asset('images/blogs/'.$blog->featured_image) ?? asset('images/abc.png') }}",
      "url": "{{ url()->current() }}",
      "author": {
        "@type": "Person",
        "name": "{{ $blog->user->name ?? 'এ. এইচ. এম. আজিমুল হক' }}"
      },
      "datePublished": "{{ $blog->created_at ?? now()->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at ?? now()->toIso8601String() }}"
      }
  </script>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/svg" />
  <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}" />
  <meta name="msapplication-TileImage" content="{{ asset('images/favicon.png') }}" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/dewi/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/dewi/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/dewi/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/dewi/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/dewi/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="{{ asset('vendor/dewi/assets/css/main.css') }}" rel="stylesheet">
  @yield('third_party_stylesheets')
  
</head>

<body>
  @include('layouts.header')

  


  
  <main class="main">
    @yield('content')

    

  </main>

  <!-- Start Footer Area -->
  @include('layouts.footer')
  <!--/ End Footer Area -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}

 
  {{-- <script type="text/javascript" src="{{ asset('vendor/wp-content/plugins/flying-pages/flying-pages.min3575.js') }}" id="flying-pages-js" defer></script> --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/dewi/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('vendor/dewi/assets/vendor/php-email-form/validate.js') }}"></script> --}}
  <script src="{{ asset('vendor/dewi/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/dewi/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/dewi/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/dewi/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/dewi/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/dewi/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('vendor/dewi/assets/js/main.js') }}"></script>
  

  @yield('third_party_scripts')
  @include('partials._messages')
</body>

</html>