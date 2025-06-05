@extends('layouts.index')
@section('title') Events @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/news-page-background.gif') }}');">
      <div class="container position-relative">
        <h1>Events</h1>
        <p>Shaping the Future: Our Event Series</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Events</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    

    <section id="events" class="events section">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about.jpg') }}" alt="AI & Sustainable Water Futures Summit">
              </div>
              <div class="card-body">
                <h5 class="card-title">AI & Sustainable Water Futures Summit</h5>
                <p class="fst-italic text-center">Tuesday, July 15th, 2025 at 9:00 AM</p>
                <p class="card-text">Explore cutting-edge AI applications for optimizing water treatment, distribution, and scarcity solutions. This summit brings together leading experts to discuss smart infrastructure, predictive analytics, and data-driven resource management.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about-2.jpg') }}" alt="Nanotech Innovations for Clean Water: A Global Forum">
              </div>
              <div class="card-body">
                <h5 class="card-title">Nanotech Innovations for Clean Water: A Global Forum</h5>
                <p class="fst-italic text-center">Thursday, August 7th, 2025 at 10:30 AM</p>
                <p class="card-text">Discover groundbreaking advancements in nanotechnology for water purification, desalination, and contaminant removal. Sessions will highlight novel membrane technologies, advanced filtration materials, and scalable nano-solutions for global water challenges.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about-2.jpg') }}" alt="The Tech-Driven Water Economy Conference 2025">
              </div>
              <div class="card-body">
                <h5 class="card-title">The Tech-Driven Water Economy Conference 2025</h5>
                <p class="fst-italic text-center">Monday, September 22nd, 2025 at 11:00 AM</p>
                <p class="card-text">A deep dive into the integration of digital technologies, IoT, and advanced analytics transforming the water sector. This conference examines smart water grids, operational efficiency, and investment opportunities in the evolving water industry.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about.jpg') }}" alt="Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience">
              </div>
              <div class="card-body">
                <h5 class="card-title">Aqua-AI & Robotics: Enhancing Water Infrastructure Resilience</h5>
                <p class="fst-italic text-center">Wednesday, October 8th, 2025 at 2:00 PM</p>
                <p class="card-text">Focus on how AI and robotics are revolutionizing inspection, maintenance, and automation in water infrastructure. Learn about intelligent monitoring systems, autonomous solutions, and their role in ensuring resilient water supply.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about-2.jpg') }}" alt="Nano-Filtration Breakthroughs: Addressing Emerging Contaminants">
              </div>
              <div class="card-body">
                <h5 class="card-title">Nano-Filtration Breakthroughs: Addressing Emerging Contaminants</h5>
                <p class="fst-italic text-center">Friday, November 14th, 2025 at 9:30 AM</p>
                <p class="card-text">Uncover the latest research and commercial applications of nanofiltration in tackling microplastics, pharmaceuticals, and other emerging pollutants in water. This event provides insights into advanced materials and their environmental impact.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('vendor/dewi/assets/img/about.jpg') }}" alt="Smart Cities & Water: IoT's Role in Urban Sustainability">
              </div>
              <div class="card-body">
                <h5 class="card-title">Smart Cities & Water: IoT's Role in Urban Sustainability</h5>
                <p class="fst-italic text-center">Monday, December 1st, 2025 at 1:00 PM</p>
                <p class="card-text">Explore how the Internet of Things (IoT) is critical for developing smart water management systems in urban environments. Discussions will cover real-time monitoring, leak detection, and optimizing resource usage for sustainable cities.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <style>
      /*--------------------------------------------------------------
      # Events Section
      --------------------------------------------------------------*/
      .events .card {
        border: 0;
        padding: 0 30px;
        margin-bottom: 60px;
        position: relative;
      }

      .events .card-img {
        width: calc(100% + 60px);
        margin-left: -30px;
        overflow: hidden;
        z-index: 9;
        border-radius: 0;
      }

      .events .card-img img {
        max-width: 100%;
        transition: all 0.3s ease-in-out;
      }

      .events .card-body {
        z-index: 10;
        background: var(--background-color);
        border-top: 4px solid var(--background-color);
        padding: 30px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        margin-top: -60px;
        transition: 0.3s;
      }

      .events .card-title {
        font-weight: 700;
        text-align: center;
        margin-bottom: 20px;
      }

      .events .card-title a {
        color: var(--default-color);
        transition: 0.3s;
      }

      .events .card-text {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
      }

      .events .card:hover img {
        transform: scale(1.1);
      }

      .events .card:hover .card-body {
        border-color: var(--accent-color);
      }

      .events .card:hover .card-body .card-title a {
        color: var(--accent-color);
      }
    </style>


@endsection

@section('third_party_scripts')

@endsection