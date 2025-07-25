@extends('layouts.index')
@section('title') About Us @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>About Us</h1>
        <p>Innovating from Concept to Creation as a Global Integrated Device Manufacturer</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">About Us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p>Driven by Innovation<br></p>
      </div><!-- End Section Title -->

      {{-- <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div> --}}
      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>The future is smaller, smarter — and we’re building the nanoscale tech to power it.</h3>
            <img src="{{ asset('images/about-us-page.gif') }}" class="img-fluid rounded-4 mb-4" alt="">
            {{-- <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p> --}}
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style="font-size:19px;line-height:107%;">Cactus Nano <sup>TM</sup></span></strong><span style="font-size:19px;line-height:107%;">, a spin-off from <strong>Cactus Materials, Inc.</strong> (a US-based semiconductor and advanced materials company), focuses on innovative products like <strong>CoreSil&trade; Membrane, Suspension, and Powder</strong> for textile, water, medical, and space industries. As a research-driven firm, Cactus collaborates with academia and national agencies, including <strong>NASA</strong> and <strong>Arizona State University</strong>, to develop advanced materials&mdash;particularly its <strong>antimicrobial technology</strong>, the core of its materials division. CoreSil&trade; RO membranes outperform conventional systems in wastewater, surface water, and seawater treatment. Cactus also partners with top US firms to provide integrated water treatment solutions.</span></p>
              <p class="fst-italic">
                Cactus Nano™, a spin-off of Cactus Materials, develops advanced antimicrobial materials like CoreSil™ for diverse industries, collaborating with NASA, ASU, and top US firms to deliver cutting-edge water treatment solutions.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Cactus Nano™: Spin-off of US-based Cactus Materials, Inc.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Products: CoreSil™ Membrane, Suspension & Powder for textile, water, medical & space.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Focus: R&D in antimicrobial technology.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Collaboration: Works with NASA, ASU & others.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Performance: CoreSil™ RO membranes beat conventional systems.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Partnerships: Teams with top US firms for water treatment.</span></li>

              </ul>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Starter Section Section -->

    <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Our Story</h2>
            <p>The Story Behind CactusNano</p>
          </div><!-- End Section Title -->

          <div class="container">
            <h4 data-aos="fade-up">Founded in 2016 as part of Cactus Materials, Cactus Nano officially became a separate entity in 2023. It gained global recognition through projects with NASA, USTDA, and PFAS research supported by the US Department of Energy.</h4>
            <div class="row gy-4">

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>2016</h3>
                  </a>
                  <p>CactusNano was founded in 2016 under Cactus Materials and became a separate company in 2023.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>2019</h3>
                  </a>
                  <p>Cactus Antimicrobial, a Delaware corp., began in R&D stealth mode, developing cutting-edge antimicrobial technologies.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-chat-text" style="color: #20c997;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>2021</h3>
                  </a>
                  <p>NASA awarded the company a multi-million-dollar contract for next-gen antimicrobial materials, a major innovation milestone.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>2023</h3>
                  </a>
                  <p>Cactus Antimicrobial, Inc. spun off from Cactus Materials, Inc. to independently focus on antimicrobial solutions.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-globe" style="color: #6610f2;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>2024–2025</h3>
                  </a>
                  <p>Operating under the DBA (Doing Business As) name "Cactus Nano", the company took strategic steps to expand its operations.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-clock" style="color: #f3268c;"></i>
                  </div>
                  <a href="#!" class="stretched-link">
                    <h3>Key initiatives:</h3>
                  </a>
                  <p>Expanded operations with in-house CoreSil™ manufacturing, increased production, global outreach, and deeper customer & regulatory engagement.</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>

        </section>

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
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
    <section id="stats" class="stats section">

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

    </section><!-- /Stats Section -->

    


@endsection

@section('third_party_scripts')

@endsection