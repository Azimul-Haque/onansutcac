@extends('layouts.index')
@section('title') Why work with us @endsection

@section('third_party_stylesheets')

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <style>
    #map {
      height: 500px;  /* Required for Leaflet to display */
      width: 100%;
      border-radius: 10px; /* Optional: smooth edges */
    }
    </style>
  
@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <!-- <h1>Why Work With Us</h1>
        <p>Discover the unique advantages of collaborating with us</p> -->
        <nav class="breadcrumbs">
          <ol>
            <!-- <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Why Work With Us</li> -->
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Discover the Difference</h2>
        <p>Why Work With Us</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" data-aos="fade-up">

          {!! $wwwutop->content !!}

        </div>

        <style>
            .feature-box {
                background-color: #fff;
                border-radius: 0.75rem; /* Rounded corners */
                padding: 1.5rem;
                display: flex;
                align-items: flex-start; /* Align icon and text at the top */
                gap: 1rem; /* Space between icon and text */
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Subtle shadow */
            }
            .feature-box .icon {
                font-size: 2.5rem; /* Large icon size */
                color: #f97316; /* Orange color for icons */
                flex-shrink: 0; /* Prevent icon from shrinking */
            }
            .feature-box .text {
                font-size: 1.125rem; /* Slightly larger text */
                color: #374151; /* Darker gray text */
                line-height: 1.6;
            }
        </style>

      </div>

    </section><!-- /Starter Section Section -->

    <section id="global-presence" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Connecting Across Continents</h2>
        <p>Global Presence</p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div id="map"></div>
          </div>
        </div>
      </div>
        {{-- <div class="row g-4 justify-content-center mb-4">
            
            <div class="col-12 col-md-12">
              <div id="map"></div>
              <img src="{{ asset('images/global-presence.png') }}" class="img-fluid rounded-4 mt-4" alt="Global Presence" style="width: 100%;">
            </div>
        </div> --}}

    </section>

    
    

@endsection

@section('third_party_scripts')

    <!-- Leaflet JS -->
      <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

      <script>
        // Initialize map
        var map = L.map('map').setView([20, 0], 2);

        // Load OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
          autoClose: false,
        }).addTo(map);

        // Define custom icon (blue pin)
        var customIcon = L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png', // pin image
            iconSize: [32, 32], // size of the icon
            iconAnchor: [16, 32], // point of the icon at marker's location
            popupAnchor: [0, -32] // position of popup relative to icon
        });

        // Add markers with custom icons
{{--         L.marker([1.3521, 103.8198], {icon: customIcon}).addTo(map)
        .bindPopup('<b>Singapore</b>').bindTooltip('<b>Singapore</b>').openTooltip();

        L.marker([40.7128, -74.0060], {icon: customIcon}).addTo(map)
        .bindPopup('<b>New York, USA</b>').bindTooltip('<b>New York, USA</b>').openTooltip();

        L.marker([51.5074, -0.1278], {icon: customIcon}).addTo(map)
        .bindPopup('<b>London, UK</b>').bindTooltip('<b>London, UK</b>').openTooltip(); --}}

        var globalpresences = @json($globalpresences);

        globalpresences.forEach(function(globalpresence) {
            if (globalpresence.lat && globalpresence.lng) {
                L.marker([globalpresence.lat, globalpresence.lng], {icon: customIcon})
                    .addTo(map)
                    .bindPopup("<b>" + globalpresence.placename + "</b>")
                    .bindTooltip("<b>" + globalpresence.placename + "</b>")
                    .openTooltip();
            }
        });
      </script>

@endsection