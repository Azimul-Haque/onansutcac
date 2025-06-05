@extends('layouts.index')
@section('title') Regional Offices @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/market-background-top.gif') }}');">
      <div class="container position-relative">
        <h1>Regional Offices</h1>
        <p>Connecting You to Our Global Network</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Regional Offices</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    

    <!-- services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Regional Offices</h2>
        <p>Find the Office Nearest You<br></p>
      </div><!-- End Section Title -->

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">
        

        <div class="map-container">
          <!-- Simplified SVG World Map (no Antarctica, land colored #DAF3F8) -->
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/BlankMap-World-Compact.svg" alt="World Map" class="world-map">

          <!-- Example Pins -->
          <div class="pin" style="top: 38%; left: 22%;">
            <div class="tooltip">
              USA Office<br>
              <a href="https://usa.example.com" target="_blank">Visit Site</a>
            </div>
          </div>

          <div class="pin" style="top: 58.5%; left: 79%;">
            <div class="tooltip">
              Singapore Office<br>
              <a href="https://sg.example.com" target="_blank">Visit Site</a>
            </div>
          </div>

          <div class="pin" style="top: 33%; left: 41%;">
            <div class="tooltip">
              UK Office<br>
              <a href="https://uk.example.com" target="_blank">Visit Site</a>
            </div>
          </div>
        </div>

      </div>

      <style>
          .map-container {
            position: relative;
            width: 100%;
            overflow: hidden;
          }

          .world-map {
            width: 100%;
            display: block;
          }

          .pin {
            position: absolute;
            width: 16px;
            height: 16px;
            background: linear-gradient(145deg, #4e00c2, #00c2c2);
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            cursor: pointer;
            transform: translate(-50%, -50%);
          }

          .pin:hover .tooltip {
            opacity: 1;
            visibility: visible;
          }

          .tooltip {
            position: absolute;
            top: -10px;
            left: 20px;
            background: rgba(0, 0, 0, 0.75);
            color: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            white-space: nowrap;
            font-size: 0.85rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 10;
          }

          .tooltip a {
            color: #aeeaff;
            text-decoration: underline;
          }
        </style>



    </section><!-- /services Section -->

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

@endsection