@extends('layouts.index')
@section('title') {{ $news->title }} | News Details @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/news-page-background.gif') }}');">
      <div class="container position-relative">
        <h1>{{ $news->title }}</h1>
        <p>{{ news_type($news->type) }}</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">News Details</li>
          </ol>
        </nav>
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
                  <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" style="width: 100%; heigh: auto;">
                </div>

                <h2 class="title">{{ $news->title }}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-megaphone"></i><a href="#!">{{ news_type($news->type) }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#!"><time datetime="{{ $news->created_at }}">{{ date('F d, Y', strtotime($news->created_at)) }}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-book"></i> {{ estimatedReadingTime($news->text) }} mins read</li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  {!! $news->text !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="{{ route('index.categories.news', Str::slug($news->newscategory->name)) }}" class="badge bg-success" style="color: #FFFFFF;">{{ $news->newscategory->name }}</a></li>
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