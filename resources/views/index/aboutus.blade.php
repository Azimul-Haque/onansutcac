@extends('layouts.index')
@section('title') About Us @endsection

@section('third_party_stylesheets')
  
@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <!-- <h1>About Us</h1>
        <p>Innovating from Concept to Creation as a Global Integrated Device Manufacturer</p> -->
        <nav class="breadcrumbs">
          <ol>
            <!-- <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">About Us</li> -->
          </ol>
        </nav>
      </div>
    </div>

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Driven by Innovation</h2>
        <p>About Us<br></p>
      </div><!-- End Section Title -->

      {{-- <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div> --}}
      <div class="container">

        <div class="row gy-4">

          {!! $aboutpagetop->content !!}
          
        </div>

      </div>

    </section><!-- /Starter Section Section -->

    <section id="our-story" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title aos-init" data-aos="fade-up">
        <h2>The Story Behind CactusNano</h2>
        <p>Our History</p>
      </div><!-- End Section Title -->

      <div class="container">
        
        {!! $ourhistory->content !!}
        
      </div>

    </section>

    <section id="vission-mission" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Vision & Mission Statements</h2>
        <p>Our Aspiration and Approach</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center mb-4">
            
            {!! $missionvission->content !!}
        
        </div>
        {{-- <img src="{{ asset('images/vision-mission.jpg') }}" class="img-fluid rounded-4 mt-4" alt="Vision & Mission Statements"> --}}
      </div>

      <style>
          .vision-card, .mission-card {
              padding: 2rem;
              border-radius: 0.5rem;
              box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
              height: 100%; /* Ensure cards have equal height */
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .vision-card {
              background-color: #e0f7fa; /* Light blue */
              color: #00796b; /* Darker teal for text */
          }
          .mission-card {
              background-color: #e8f5e9; /* Light green */
              color: #2e7d32; /* Darker green for text */
          }
          .vision-card h2, .mission-card h2 {
              font-size: 2.5rem; /* Larger title */
              margin-bottom: 1rem;
              font-weight: 700;
          }
          .vision-card p, .mission-card p {
              font-size: 1.25rem; /* Larger paragraph text */
              line-height: 1.6;
          }

          .box-card {
              background-color: #ffffff;
              border-radius: 1rem;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
              padding: 2.5rem;
              height: 100%;
              display: flex;
              flex-direction: column;
              justify-content: center;
          }
          .vision-card {
              background-color: #e0f7fa; /* Light blue */
              color: #00796b; /* Darker teal for text */
              text-align: center;
              border: 1px solid #e9ecef;
          }
          .mission-card {
              background-color: #e8f5e9; /* Light green */
              color: #2e7d32; /* Darker green for text */
              border: 1px solid #e9ecef;
          }
          .statement-title {
              font-size: 2.2rem;
              font-weight: 700;
              margin-bottom: 1rem;
              color: #007bff;
          }
          .statement-text {
              font-size: 1.1rem;
              font-weight: 500;
              line-height: 1.6;
          }
          .mission-points {
              margin-top: 2rem;
              padding-top: 1.5rem;
              border-top: 1px solid #e9ecef;
          }
          .point-item {
              display: flex;
              align-items: center;
              text-align: left;
              padding: 1rem 0;
              border-bottom: 1px solid #e9ecef;
          }
          .point-item:last-child {
              border-bottom: none;
          }
          .point-item svg {
              color: #007bff;
              margin-right: 1.5rem;
              height: 3rem;
              width: 3rem;
              min-width: 3rem;
          }
          .point-item h5 {
              font-size: 1.25rem;
              font-weight: 600;
              margin: 0;
              line-height: 1.4;
          }
          .point-item p {
              font-size: 0.95rem;
              color: #6c757d;
          }
          .separator {
              width: 100%;
              height: 1px;
              background-color: #e9ecef;
              margin-top: 2rem;
              margin-bottom: 2rem;
          }
      </style>

    </section>



    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Check our Team</h2>
        <p>Leadership Team</p>
        <h5>Meet the minds shaping the nanoscale future — visionaries, engineers, and innovators pushing the boundaries of what's possible.</h5>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
          @foreach($teams as $team)
            @php
              $modulo_index = ($loop->iteration - 1) % 4;
              $delay = 100 + ($modulo_index * 100);
            @endphp
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $delay }}">
              <div class="member">
                <div class="pic"><img src="{{ asset('images/teams/' . $team->image) }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>{{ $team->name }}</h4>
                  <span>{{ $team->designation }}</span>
                  <div class="social">
                    <a href="#!"
                        class="btn-details"
                        data-bs-toggle="modal"
                        data-bs-target="#teamDetailModal{{ $team->id }}"
                        data-name="{{ $team->name }}"
                        data-designation="{{ $team->designation }}"
                        data-image="{{ asset('images/teams/' . $team->image) }}"
                        data-about="{{ Purifier::clean($team->about, 'youtube') }}"><i class="bi bi-search"></i> <small>Details</small></a>
                    {{-- <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="teamDetailModal{{ $team->id }}" tabindex="-1" aria-labelledby="teamDetailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> {{-- Centered and Large modal for better display --}}
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="text-center">
                                  <img src="{{ asset('images/teams/' . $team->image) }}" alt="Team Member" class="img-fluid rounded-circle border border-primary border-3" style="width: 200px; height: 200px; object-fit: cover; margin-bottom: 5px;"><br/><br/>
                              </div>
                              <div class="text-center ">
                                <h3 class="text-center mb-1 mt-1" id="modalTeamName">{{ $team->name }}</h3>
                                <p class="text-center text-muted mb-4" id="modalTeamDesignation">{{ $team->designation }}</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="about-content" id="modalTeamAbout">
                                  {!!  $team->about !!}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer border-0 pt-0">
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        </div>
                    </div>
                </div>
            </div>
          @endforeach

          <style>
              .btn-details {
                  background: none;
                  border: none;
                  color: #007bff; /* Bootstrap primary color */
                  padding: 0;
                  font-size: 0.9rem;
                  cursor: pointer;
                  display: inline-flex;
                  align-items: center;
                  transition: color 0.3s ease;
              }

              .btn-details:hover {
                  color: #0056b3; /* Darker shade on hover */
              }

              .btn-details i {
                  margin-right: 5px;
                  font-size: 1.1rem;
              }

              /* Styles for the circular image and text wrapping inside the modal */
              #modalTeamImage {
                  float: left; /* Float the image to the left */
                  margin-right: 20px; /* Space between image and text */
                  margin-bottom: 10px; /* Space below image if text wraps tightly */
                  /* To ensure text wraps around the circle, especially for longer descriptions */
                  shape-outside: circle(50%); /* This helps text wrap more cleanly around the circle */
              }

              .about-content::after { /* Clear float after the content */
                  content: "";
                  display: table;
                  clear: both;
              }

              /* Adjust font size and line height for about text within modal */
              .about-content p {
                  font-size: 1rem;
                  line-height: 1.6;
                  color: #555;
              }

              /* Ensure modal content scrolls if it overflows */
              .modal-body {
                  max-height: calc(100vh - 200px); /* Adjust max-height based on header/footer size */
                  overflow-y: auto;
              }

              /* Small adjustment for modal close button to be on the right */
              .modal-header .btn-close {
                  margin-left: auto; /* Pushes close button to the right */
                  font-size: 1.2rem;
              }

              /* Bootstrap 5 specific classes - if you're using older Bootstrap, check compatibility */
              .rounded-circle { border-radius: 50% !important; }
          </style>
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Stats Section -->
    {{-- <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Stats</h2>
        <p>A Legacy of Progress</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Years of Hard Work</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p>Engineers & Scientists</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nationalities</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Industry Awards</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                <p>Global Offices</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nationalities</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section> --}}
    <!-- /Stats Section -->

    


@endsection

@section('third_party_scripts')

@endsection