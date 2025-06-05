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
                <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="Lara's 1th Birthday">
              </div>
              <div class="card-body">
                <h5 class="card-title">Lara's 1th Birthday</h5>
                <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">James 6th Birthday</h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
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