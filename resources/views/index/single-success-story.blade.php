@extends('layouts.index')
@section('title') {{ $successstory->title }} | Success Story @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        {{-- <h1>Success Story</h1>
        <p>{{ $successstory->title }}</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Success Story</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    
    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ asset('images/success-stories/' . $successstory->image) }}" alt="{{ $successstory->title }}" class="img-fluid" style="width: 100%; heigh: auto;">
                </div>

                <h2 class="title">{{ $successstory->title }}</h2>

                <div class="meta-top">
                  <ul>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> --}}
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{ $successstory->created_at }}">{{ date('F d, Y', strtotime($successstory->created_at)) }}</time></a></li>
                    <!-- <li class="d-flex align-items-center"><i class="bi bi-book"></i> {{ estimatedReadingTime($successstory->text) }} mins read</li> -->
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  {!! $successstory->text !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#" class="badge bg-secondary" style="color: #FFFFFF;">{{ $successstory->type }}</a></li>
                  </ul>

                  {{-- <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Creative</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Tips</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Marketing</a></li>
                  </ul> --}}
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        

        </div>

        <div class="col-lg-4 sidebar">

          @include('partials._newssidebar')

        </div>

      </div>
    </div>
    

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Innovating with Nature</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Advanced materials and smart technologies for a sustainable future.
        </p>
        <a href="{{ route('index.get-contact') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite;">
          Connect with Us
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>


@endsection

@section('third_party_scripts')

@endsection