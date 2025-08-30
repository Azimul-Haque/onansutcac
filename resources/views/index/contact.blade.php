@extends('layouts.index')
@section('title') Contact @endsection

@section('third_party_stylesheets')

  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>We're just a message away. Let us know how we can help you today!</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Reach Out to Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">
              @if(strlen(strip_tags($contactdata[0]->content)) > 0)
              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>{{ strip_tags($contactdata[0]->content) }}</p>
                </div>
              </div><!-- End Info Item -->
              @endif

              @if(strlen(strip_tags($contactdata[1]->content)) > 0)
              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>{{ strip_tags($contactdata[1]->content) }}</p>
                </div>
              </div><!-- End Info Item -->
              @endif

              @if(strlen(strip_tags($contactdata[2]->content)) > 0)
              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{ strip_tags($contactdata[2]->content) }}</p>
                </div>
              </div><!-- End Info Item -->
              @endif

            </div>
          </div>

          <div class="col-lg-6">
            <form action="{{ route('index.store-contact') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                @csrf

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old("name") }}" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old("email") }}" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old("subject") }}" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required="">{{ old("message") }}</textarea>
                </div>

                <div class="col-md-6 ">
                  <img src="{{ route('captcha.image') }}" alt="Captcha Text" style="height: auto; width: 150px;">
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="captcha" placeholder="Write the Captcha" required="">
                </div>
                

                <div class="col-md-12 text-center">

                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->


    <div class="row">
      <div class="col-md-8">
        </span><p class="MsoNormal"><b><span style="font-size:14pt;line-height:107%;"><br></span></b></p></div></div><table class="table border=0"><tbody><tr align="center"><td><p><b><span style="font-size:14pt;line-height:107%;"><span style="font-family:'Segoe UI';font-size:24px;">SCIENCE
        AT NANO SCALE</span><span style="font-size:24px;">&nbsp;&nbsp; </span><span style="font-family:'Segoe UI';font-size:24px;">- IMPACT AT THE GLOBAL
        SCALE</span></span></b></p><p><b><span style="font-size:14pt;line-height:107%;"><br></span></b></p></td></tr><tr><td><p class="MsoNormal" align="justify" style="color: rgb(0, 0, 0); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;"><span style="font-size: 18pt; line-height: 25.68px; font-family: &quot;Segoe UI&quot;;"><span style="font-weight: bolder;"><span style="font-size: 18px;">CactusNano</span></span><span style="font-size: 18px;">&nbsp;is a materials science and nanotechnology company dedicated to solving some of the world’s most pressing challenges in health, environment, and technology.&nbsp;</span><span style="font-weight: bolder;"><span style="font-size: 18px;">Cactus Nano</span></span></span><span style="font-size: 18pt; line-height: 25.68px; font-family: &quot;Segoe UI&quot;;"><span style="font-size: 18px;">, a spin-off from&nbsp;</span><span style="font-weight: bolder;"><span style="font-size: 18px;">Cactus Materials, Inc</span></span><span style="font-size: 18px;">. (a US-based semiconductor and advanced materials company), focuses on innovative products like&nbsp;</span><span style="font-weight: bolder;"><span style="font-size: 18px;">CoreSil™</span></span><span style="font-size: 18px;">&nbsp;Membrane, Suspension, and Powder for textile, water, medical, and space industries.</span></span></p><p class="MsoNormal" align="justify"><span style="color: rgb(0, 0, 0); text-align: start; font-family: &quot;Segoe UI&quot;; font-size: 18px;"></span><span style="color: rgb(0, 0, 0); text-align: start; font-family: &quot;Segoe UI&quot;; font-size: 24px;"></span></p><p class="MsoNormal" align="justify" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(0, 0, 0); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 19.9733px; font-family: Verdana, sans-serif;"><span style="box-sizing: border-box; font-family: &quot;Segoe UI&quot;; font-size: 18pt;"><span style="box-sizing: border-box; font-size: 18px; font-family: &quot;Segoe UI&quot;;">With research-driven innovation and partnerships across textiles, electronics, water treatment, and consumer products, we design nanoscale solutions that integrate seamlessly into everyday life while enhancing durability, efficiency, and sustainability. Cactus collaborates with academia and national agencies, including<span>&nbsp;</span></span><b style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: border-box; font-family: &quot;Segoe UI&quot;; font-size: 18px;">NASA</span></b><span style="box-sizing: border-box; font-size: 18px; font-family: &quot;Segoe UI&quot;;"><span>&nbsp;</span>and<span>&nbsp;</span></span><b style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: border-box; font-family: &quot;Segoe UI&quot;; font-size: 18px;">Arizona State University</span></b><span style="box-sizing: border-box; font-size: 18px; font-family: &quot;Segoe UI&quot;;">, to develop advanced materials—particularly its antimicrobial technology, the core of its materials division. CoreSil™ RO membranes outperform conventional systems in wastewater, surface water, and seawater treatment. Cactus also partners with top US firms to provide integrated water treatment solutions</span></span></span></p></td></tr></tbody></table><div class="col-lg-6 aos-init aos-animate" style="width:660px;padding-right:12px;padding-left:12px;max-width:100%;margin-top:24px;color:rgb(68,68,68);font-family:Roboto, 'system-ui', '-apple-system', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';"><div class="col-lg-6 aos-init aos-animate" style="width:660px;padding-right:12px;padding-left:12px;max-width:100%;margin-top:24px;color:rgb(68,68,68);font-family:Roboto, 'system-ui', '-apple-system', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';"><p class="MsoNormal"><b><span style="font-size:14pt;line-height:107%;"><br></span></b></p><p class="MsoNormal"><b><span style="font-size:14pt;line-height:107%;"><br></span></b></p><br></div></div>
      </div>
      <div class="col-md-8">
        
      </div>
    </div>





    <!-- Map Section -->
    <section id="map" class="map section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Google Map</h2>
        <p>Find Your Way to Us</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2266.4553566917803!2d-111.97655886791999!3d33.39488038211913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b0f41cf704065%3A0x1ce0fd877cf64bc3!2sParking%20lot%2C%202502%20W%20Huntington%20Dr%2C%20Tempe%2C%20AZ%2085282%2C%20USA!5e0!3m2!1sen!2sbd!4v1755785283191!5m2!1sen!2sbd" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </section>

    <style>
      /* You can put this CSS in your main stylesheet (e.g., style.css) */
        .map-container {
          min-height: 280px; /* Sets the minimum height for the map container */
          overflow: hidden; /* Ensures shadow is contained and map doesn't spill */
          border-radius: 8px; /* Optional: Adds slightly rounded corners */
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Adds a subtle drop shadow */
          /* You can adjust the shadow values (horizontal-offset, vertical-offset, blur-radius, spread-radius, color) */
        }

        .map-container iframe {
          display: block;
        }
    </style>
    <!-- /Map Section -->

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Deep Dive Now</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          To connect or learn more, please explore the options below.
        </p>
        <a href="{{ route('index.help-center') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite;">
          Help Center
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection