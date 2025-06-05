@extends('layouts.index')
@section('title') Academia @endsection

@section('third_party_stylesheets')

  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Academia</h1>
        <p>Exploring Knowledge, Driving Discovery</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Academia</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title aos-init" data-aos="fade-up">
        <h2>Academia</h2>
        <p>Insights from Our Academic Endeavors</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-brightness-high icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Collaboration Hub</a></h4>
                <p class="description">CactusNano collaborates with different Universities. We work together and partner with a variety of world class institutions to fulfill NASA, NSF, DOE, and/or DOD grants.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Future Focus</a></h4>
                <p class="description">Many of these funding opportunities are focused on the future of space, grid, weapons, EV, data centers, and communications. </p>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>



      </div>

      <div class="container mt-5 p-5">
        <div class="row justify-content-center gx-4 gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/07/Picture25.png" class="img-fluid" alt="University Logo 1" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/07/Picture20.png" class="img-fluid" alt="University Logo 2" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/07/Picture21.png" class="img-fluid" alt="University Logo 3" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/07/Picture22.png" class="img-fluid" alt="University Logo 4" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/07/Picture23.png" class="img-fluid" alt="University Logo 5" style="max-height: 80px;">
          </div>

          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/08/purdue.png" class="img-fluid" alt="Purdue University Logo" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/08/uofa-logo.png" class="img-fluid" alt="University of Arizona Logo" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/08/gcu-logo.png" class="img-fluid" alt="Grand Canyon University Logo" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/08/nau-logo.png" class="img-fluid" alt="Northern Arizona University Logo" style="max-height: 80px;">
          </div>
          <div class="col-6 col-md-2 d-flex align-items-center justify-content-center">
            <img src="https://cactusmaterials.com/wp-content/uploads/2024/08/mcc-logo.png" class="img-fluid" alt="Mesa Community College Logo" style="max-height: 80px;">
          </div>

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