@extends('layouts.index')
@section('title') {{ $sdgdata->page_location }} @endsection

@section('third_party_stylesheets')
  
@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <!-- <h1>{{ $sdgdata->page_location }}</h1>
        <p>Discover the unique advantages of collaborating with us</p> -->
        <nav class="breadcrumbs">
          <ol>
            <!-- <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">{{ $sdgdata->page_location }}</li> -->
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Discover the Difference</h2>
        <p>{{ $sdgdata->page_location }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" data-aos="fade-up">
            
          {!! $sdgdata->content !!}

          <!-- <div class="col-12 col-md-6">
              <div class="feature-box">
                  <i class="bi bi-lightbulb icon"></i>
                  <p class="text">Slow, controlled release of antimicrobial agents for long-lasting performance</p>
              </div>
          </div>

          <div class="col-12 col-md-6">
              <div class="feature-box">
                  <i class="bi bi-award icon"></i>
                  <p class="text">Initially developed for NASA, now available for mass market applications</p>
              </div>
          </div>

          <div class="col-12 col-md-6">
              <div class="feature-box">
                  <i class="bi bi-puzzle icon"></i>
                  <p class="text">Customizable & easy integration into a wide range of materials</p>
              </div>
          </div>

          <div class="col-12 col-md-6"> 
              <div class="feature-box">
                  <i class="bi bi-star icon"></i>
                  <p class="text">Expert technical and customer support to ensure customer satisfaction</p>
              </div>
          </div> -->
        </div>

        

      </div>

    </section><!-- /Starter Section Section -->


    
    

@endsection

@section('third_party_scripts')

@endsection