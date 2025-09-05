@extends('layouts.index')
@section('title') Regional Offices @endsection

@section('third_party_stylesheets')

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

    

    <!-- services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Find the Office Nearest You</h2>
        <p>Regional Offices<br></p>
      </div><!-- End Section Title -->

      


    </section><!-- /services Section -->

    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-award"></i>
              <h4>Head Office</h4>
              <p style="margin-bottom: 20px;">2502 West Huntington Drive<br/>Tempe, AZ 85282</p>
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

@endsection