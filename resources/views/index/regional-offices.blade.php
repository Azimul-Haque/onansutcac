@extends('layouts.index')
@section('title') Regional Offices @endsection

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
        {{-- <h1>Regional Offices</h1>
        <p>Connecting You to Our Global Network</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Regional Offices</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    <section id="global-presence" class="stats section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Find the Office Nearest You</h2>
        <p>Regional Offices<br></p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div id="map" class="shadow-lg rounded-lg"></div>
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

    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-award"></i>
              <h4>Head Office</h4>
              <p style="margin-bottom: 20px;">@if(!empty($contactdata)) @endif</p>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Tel: +44 20 7946 0958</span><br/>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Email: info.uk@company.com</span>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-patch-check"></i>
              <h4>Corporate Office</h4>
              <p style="margin-bottom: 20px;">Kenya Offcie: ???</p>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Tel: +44 20 7946 0958</span><br/>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Email: info.uk@company.com</span>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-sunrise"></i>
              <h4>Regional Office</h4>
              <p style="margin-bottom: 20px;">India Office??</p>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Tel: +44 20 7946 0958</span><br/>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Email: info.uk@company.com</span>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-shield-check"></i>
              <h4>Regional Office</h4>
              <p style="margin-bottom: 20px;">Hi Tech City, BTL,  Kaliakoir, Gazipur, Bangladesh</p>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Tel: +44 20 7946 0958</span><br/>
              <span style="font-size: 14px; font-weight: 600; color: #3b3b3b;">Email: info.uk@company.com</span>
            </div>
          </div><!-- End Feature Borx-->

        </div>

      </div>

    </section>

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Innovating with Nature</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Advanced materials and smart technologies for a sustainable future.
        </p>
        <a href="{{ route('index.get-contact') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite;">
          Connect with Us
        </a>
      </div>
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
        {{-- attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors', --}}
        attributionControl: false
      }).addTo(map);
      map.attributionControl.setPrefix(''); // Removes the "Leaflet" prefix

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