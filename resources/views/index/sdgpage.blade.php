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


    
    

@endsection

@section('third_party_scripts')

@endsection