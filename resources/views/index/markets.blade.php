@extends('layouts.index')
@section('title') Industries/Projects @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/market-background-top.gif') }}');">
      <div class="container position-relative">
        <h1>Industries/Projects</h1>
        <p>Discover the Industries We Empower</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Industries & Projects</li>
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
              @php
                $biicons = ['code-slash', 'palette2', 'phone-fill', 'bar-chart-line', 'cloud-check', 'shield-lock']
              @endphp
              @foreach($markets as $market)
                @php
                  $modulo_index = ($loop->iteration - 1) % 2;
                  $delay = 100 + ($modulo_index * 100);
                  if($modulo_index == 0) {
                    $datadirection = 'fade-right';
                  } else {
                    $datadirection = 'fade-left';
                  }
                @endphp
                

                <article class="article">
                  <div class="post-img">
                    @if($market->image)
                        <a href="{{ route('index.singlemarket', $market->slug) }}" style="color: var(--heading-color);"><img src="{{ asset('images/markets/' . $market->image) }}" alt="{{ $market->title }}" class="img-fluid" style="width: 100%; heigh: auto;"></a>
                    @endif
                  </div>

                  <h2 class="title">{{ $market->title }}</h2>

                  <div class="meta-top">
                    <ul>
                      {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">John Doe</a></li> --}}
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('index.singlemarket', $market->slug) }}"><time datetime="{{ $market->created_at }}">{{ date('d F, Y', strtotime($market->created_at)) }}</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-book"></i> {{ estimatedReadingTime($market->text) }} mins read</li>
                    </ul>
                  </div><!-- End meta top -->

                  <div class="content">
                    {!! $market->text !!}
                  </div><!-- End post content -->

                  <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <li><a href="#" class="badge bg-info" style="color: #FFFFFF;">{{ ind_type($market->type) }}</a></li>
                    </ul>

                    {{-- <i class="bi bi-tags"></i>
                    <ul class="tags">
                      <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Creative</a></li>
                      <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Tips</a></li>
                      <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Marketing</a></li>
                    </ul> --}}
                  </div><!-- End meta bottom -->
                </article><br/><br/>

              @endforeach
              

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          @include('partials._productsidebar')

        </div>

      </div>
    </div>


@endsection

@section('third_party_scripts')

@endsection