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
              <p class="fst-italic">
                Our advanced nano-devices, semiconductors, and power technologies power the innovations of tomorrow — from clean energy to smart electronics.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Engineering at the Atomic Scale</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Powering the Future with Nano Innovation</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Smarter Devices, Sustainable Impact</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Precision-Driven. Purpose-Led.</span></li>
              </ul>
              <p>
                We engineer at the atomic level to deliver performance that’s lighter, stronger, and more sustainable. At the heart of our mission is sustainability. We design and manufacture with efficiency in mind — reducing waste, conserving energy, and extending the life of critical technologies. Our solutions help industries build greener products and smarter systems, without compromise.
              </p>
              <p>
                From precision nano-engineering to scalable manufacturing, we’re not just keeping up with the future — we’re building it.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Starter Section Section -->

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
          

          

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/2655d062-a29c-48c1-a77f-a9aa3d100107/1598986250498.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ron Elwood</h4>
                <span>CPA CFO</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/e36dfafd-a19c-4c20-b7a1-41d9a0dd1baf/iqbal.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Iqbal Ali, PhD</h4>
                <span>Director of Engineering</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/e36dfafd-a19c-4c20-b7a1-41d9a0dd1baf/iqbal.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Roger Spencer</h4>
                <span>Director of Sales</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/7f22d3e0-5fe1-4415-a2e0-212b05bd15a4/rafi-x-3_orig.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rafiqul Islam, PhD</h4>
                <span>CEO, CTO</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/2655d062-a29c-48c1-a77f-a9aa3d100107/1598986250498.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ron Elwood</h4>
                <span>CPA CFO</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/e36dfafd-a19c-4c20-b7a1-41d9a0dd1baf/iqbal.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Iqbal Ali, PhD</h4>
                <span>Director of Engineering</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              {{-- <div class="pic"><img src="{{ asset('vendor/dewi/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div> --}}
              <div class="pic"><img src="https://images.squarespace-cdn.com/content/v1/65451fe14dedd80381db3fde/e36dfafd-a19c-4c20-b7a1-41d9a0dd1baf/iqbal.jpg?format=750w" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Roger Spencer</h4>
                <span>Director of Sales</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div><!-- End Team Member -->

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

    <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Services</h2>
            <p>Our Distinct Edge</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Nesciunt Mete</h3>
                  </a>
                  <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Eosle Commodi</h3>
                  </a>
                  <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-chat-text" style="color: #20c997;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Ledo Markt</h3>
                  </a>
                  <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Asperiores Commodit</h3>
                  </a>
                  <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-globe" style="color: #6610f2;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Velit Doloremque</h3>
                  </a>
                  <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item-rifat position-relative">
                  <div class="icon">
                    <i class="bi bi-clock" style="color: #f3268c;"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Dolori Architecto</h3>
                  </a>
                  <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>

        </section>


@endsection

@section('third_party_scripts')

@endsection