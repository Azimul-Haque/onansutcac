@extends('layouts.app')
@section('title') 403 Forbidden @endsection

@section('content')
    <div class="container-fluid">
        @section('page-header') 403 Forbidden @endsection
		<div class="error-page">
			<h2 class="headline text-warning"> 403</h2>
			<div class="error-content">
				<h3><i class="fas fa-exclamation-triangle text-warning"></i> You are NOT ALLOWED!</h3>

				<p>
					The page you are requesting is not allowed for you.
					Instead, you may <a href="{{ route('dashboard.index') }}">return to dashboard</a> or try using the search form.
				</p>
			</div>
		</div>
    </div>
@endsection

@extends('layouts.index')
@section('title') 403 Forbidden @endsection

@section('third_party_stylesheets')

  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>403 Forbidden</h1>
        <p>Page Not Found, But Your Journey Continues</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">403 Forbidden</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="error-404" class="error-404 section">
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="error-wrapper">
          <div class="row align-items-center">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
              <div class="error-illustration">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
              <div class="error-content">
                <span class="error-badge aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">Error</span>
                <h1 class="error-code aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">404</h1>
                <h2 class="error-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">Page Not Found</h2>
                <p class="error-description aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
                  The Page You Requested Isn't Here. Explore Our Site.
                </p>

                <div class="error-actions aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                  <a href="{{ route('index.index') }}" class="btn-home">
                    <i class="bi bi-house-door"></i> Back to Home
                  </a>
                  <a href="{{ route('index.help-center') }}" class="btn-help">
                    <i class="bi bi-question-circle"></i> Help Center
                  </a>
                </div>

                <div class="error-suggestions aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                  <h3>You might want to:</h3>
                  <ul>
                    <li><a href="{{ route('index.sitemap') }}"><i class="bi bi-arrow-right-circle"></i> Check our sitemap</a></li>
                    <li><a href="{{ route('index.get-contact') }}"><i class="bi bi-arrow-right-circle"></i> Contact support</a></li>
                    {{-- <li><a href="#"><i class="bi bi-arrow-right-circle"></i> Return to previous page</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <style type="text/css">
    /*--------------------------------------------------------------
    # Error 404 Section
    --------------------------------------------------------------*/
    .error-404 {
      padding: 100px 0;
      background: linear-gradient(135deg, color-mix(in srgb, var(--background-color), transparent 0%), color-mix(in srgb, var(--background-color), var(--accent-color) 4%));
    }

    .error-404 .error-wrapper {
      position: relative;
      overflow: hidden;
    }

    .error-404 .error-illustration {
      position: relative;
      height: 350px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .error-404 .error-illustration i {
      font-size: 9rem;
      color: color-mix(in srgb, var(--accent-color), transparent 10%);
      position: relative;
      z-index: 2;
      animation: pulse 2s infinite;
    }

    .error-404 .error-illustration .circle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.6;
    }

    .error-404 .error-illustration .circle.circle-1 {
      width: 200px;
      height: 200px;
      background: color-mix(in srgb, var(--accent-color), transparent 80%);
      animation: float 6s ease-in-out infinite;
    }

    .error-404 .error-illustration .circle.circle-2 {
      width: 120px;
      height: 120px;
      background: color-mix(in srgb, var(--heading-color), transparent 85%);
      top: 30%;
      left: 25%;
      animation: float 8s ease-in-out infinite;
    }

    .error-404 .error-illustration .circle.circle-3 {
      width: 80px;
      height: 80px;
      background: color-mix(in srgb, var(--accent-color), transparent 75%);
      bottom: 20%;
      right: 30%;
      animation: float 7s ease-in-out infinite reverse;
    }

    .error-404 .error-content {
      padding: 30px 0;
    }

    .error-404 .error-badge {
      display: inline-block;
      background-color: color-mix(in srgb, var(--accent-color), transparent 85%);
      color: var(--accent-color);
      font-size: 0.9rem;
      font-weight: 600;
      padding: 0.5rem 1.5rem;
      border-radius: 30px;
      margin-bottom: 1.5rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .error-404 .error-code {
      font-size: clamp(5rem, 10vw, 8rem);
      font-weight: 900;
      margin: 0;
      background: linear-gradient(135deg, var(--heading-color), var(--accent-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      line-height: 1;
      letter-spacing: -2px;
    }

    .error-404 .error-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 1.5rem;
    }

    .error-404 .error-description {
      font-size: 1.1rem;
      color: color-mix(in srgb, var(--default-color), transparent 15%);
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .error-404 .error-actions {
      display: flex;
      gap: 1rem;
      margin-bottom: 2.5rem;
      flex-wrap: wrap;
    }

    .error-404 .error-actions .btn-home,
    .error-404 .error-actions .btn-help {
      padding: 0.8rem 1.8rem;
      border-radius: 8px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      transition: all 0.3s ease;
    }

    .error-404 .error-actions .btn-home i,
    .error-404 .error-actions .btn-help i {
      font-size: 1.2rem;
    }

    .error-404 .error-actions .btn-home {
      background-color: var(--accent-color);
      color: var(--contrast-color);
      border: none;
    }

    .error-404 .error-actions .btn-home:hover {
      background-color: color-mix(in srgb, var(--accent-color), transparent 15%);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px color-mix(in srgb, var(--accent-color), transparent 70%);
    }

    .error-404 .error-actions .btn-help {
      background-color: transparent;
      color: var(--accent-color);
      border: 2px solid color-mix(in srgb, var(--accent-color), transparent 75%);
    }

    .error-404 .error-actions .btn-help:hover {
      background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
      transform: translateY(-3px);
    }

    .error-404 .error-suggestions {
      padding: 1.5rem;
      background-color: color-mix(in srgb, var(--background-color), var(--accent-color) 5%);
      border-radius: 12px;
    }

    .error-404 .error-suggestions h3 {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--heading-color);
      margin-bottom: 1rem;
    }

    .error-404 .error-suggestions ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .error-404 .error-suggestions ul li {
      margin-bottom: 0.8rem;
    }

    .error-404 .error-suggestions ul li:last-child {
      margin-bottom: 0;
    }

    .error-404 .error-suggestions ul li a {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--default-color);
      font-size: 1.05rem;
      transition: all 0.3s;
    }

    .error-404 .error-suggestions ul li a i {
      color: var(--accent-color);
      font-size: 1.1rem;
      transition: transform 0.3s;
    }

    .error-404 .error-suggestions ul li a:hover {
      color: var(--accent-color);
    }

    .error-404 .error-suggestions ul li a:hover i {
      transform: translateX(3px);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }
    }

    @media (max-width: 992px) {
      .error-404 .error-illustration {
        height: 300px;
        margin-bottom: 2rem;
      }
    }

    @media (max-width: 768px) {
      .error-404 {
        padding: 70px 0;
      }

      .error-404 .error-code {
        font-size: clamp(4rem, 12vw, 6rem);
      }

      .error-404 .error-title {
        font-size: 1.8rem;
      }

      .error-404 .error-actions {
        flex-direction: column;
      }

      .error-404 .error-actions .btn-home,
      .error-404 .error-actions .btn-help {
        width: 100%;
        justify-content: center;
      }
    }

    </style>




@endsection

@section('third_party_scripts')

@endsection
