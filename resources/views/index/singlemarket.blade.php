@extends('layouts.index')
@section('title') {{ $market->title }} | Markets @endsection

@section('third_party_stylesheets')

@endsection

<style type="text/css">
  .content img {
    max-width: 100% !important;
    height: auto !important;
  }
</style>



@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        {{-- <h1>{{ $market->title }}</h1>
        <p>{{ ind_type($market->type) }}</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">{{ ind_type($market->type) }} Details</li>
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
                  @if($market->image)
                      <img src="{{ asset('images/markets/' . $market->image) }}" alt="{{ $market->title }}" class="img-fluid" style="width: 100%; heigh: auto;">
                  @endif
                </div>

                <h2 class="title">{{ $market->title }}</h2>

                <div class="meta-top">
                  <ul>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('index.singlemarket', $market->slug) }}">John Doe</a></li> --}}
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('index.singlemarket', $market->slug) }}"><time datetime="{{ $market->created_at }}">{{ date('d F, Y', strtotime($market->created_at)) }}</time></a></li> --}}
                    <!-- <li class="d-flex align-items-center"><i class="bi bi-book"></i> {{ estimatedReadingTime($market->text) }} mins read</li> -->
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

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          @include('partials._productsidebar')

        </div>

      </div>
    </div>

    <section id="relevant-technologies" class="section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Relevant Industry/Project</h2>
        <p>See Where We Make an Impact<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="relevant-technologies-widget ">
          <div class="row">
            <div class="col-md-4">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($marketsforfooter as $key => $market)
                  <a class="nav-link custom-nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-tab-{{ $market->id }}" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $market->id }}" type="button" role="tab" aria-controls="v-pills-{{ $market->id }}" aria-selected="true">{{ $market->title }}</a>
                @endforeach
              </div>
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="tab-content w-100" id="v-pills-tabContent">
                @foreach($marketsforfooter as $key => $market)
                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="v-pills-{{ $market->id }}" role="tabpanel" aria-labelledby="v-pills-tab-{{ $market->id }}" tabindex="0">
                  <span class="badge bg-primary position-absolute top-0 end-0 m-2" style="font-size: 0.85em; padding: 0.3em 0.75em; border-radius: 0.5rem;">
                      {{ ind_type($market->type) ?? 'Product Type' }} <!-- Replace $product->type with your actual variable -->
                  </span>
                  <p>{{ Str::limit(strip_tags($market->text), 300) }}</p>
                  <a href="{{ route('index.singlemarket', $market->slug) }}" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        /* --- Custom CSS for the Widget --- */

        .relevant-technologies-widget {
          background-color: rgba(255, 255, 255, 0.7); /* White with 70% opacity */
          backdrop-filter: blur(10px); /* Frosted glass effect */
          border-radius: 15px; /* Rounded corners for the widget */
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Soft shadow */
          padding: 30px; /* Internal padding */
          min-height: 400px; /* Ensure a decent height for the widget */
          display: flex; /* Use flexbox to center content vertically if needed */
          align-items: center; /* Vertically center content */
        }

        /* Styling for the left navigation links */
        .custom-nav-link {
          color: #6a1aed; /* Your desired text color for inactive links */
          font-weight: 500;
          padding: 10px 20px;
          margin-bottom: 8px; /* Space between links */
          border-radius: 0; /* Remove default pill rounding */
          transition: all 0.3s ease; /* Smooth transition for hover/active */
          position: relative; /* For the active line */
          background-color: transparent; /* Ensure no default grey background */
        }

        .custom-nav-link:hover {
          color: #4a00af; /* Darker hover color */
          background-color: rgba(255, 255, 255, 0.3); /* Slightly brighter hover background */
        }

        .custom-nav-link.active {
          color: #000; /* Text color for active link */
          font-weight: 600;
          background-color: transparent; /* No background fill, just the border */
          position: relative; /* For the line */
        }

        .custom-nav-link.active::before {
          content: '';
          position: absolute;
          left: 0; /* Align to the left edge */
          top: 50%;
          transform: translateY(-50%);
          width: 5px; /* Thickness of the active line */
          height: 80%; /* Height of the active line */
          background: linear-gradient(to bottom, #8a2be2, #4a00af); /* Gradient for the active line */
          border-radius: 2px; /* Slightly rounded ends for the line */
        }

        /* Styling for the Discover More button */
        .discover-more-btn {
          background: linear-gradient(to right, #8a2be2, #4a00af); /* Your desired gradient */
          border: none;
          color: white;
          padding: 10px 25px;
          border-radius: 5px;
          text-transform: uppercase;
          font-weight: bold;
          transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .discover-more-btn:hover {
          transform: translateY(-2px); /* Slight lift on hover */
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
          color: white; /* Ensure text color remains white on hover */
        }

        /* Adjustments for text in content area */
        .tab-content p {
          color: #333; /* Darker text for readability */
          line-height: 1.8;
        }
      </style>

    </section>

    <style>
      .testimonials .testimonial-item {
          background-color: var(--surface-color);
          box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
          box-sizing: content-box;
          padding: 30px;
          margin: 30px 15px;
          position: relative;
          height: 100%;
      }

      .testimonials .testimonial-item {
          text-align: left !important;
      }

      .testimonials .post-img {
          max-height: 240px;
          margin: -30px -30px 15px;
          overflow: hidden;
      }

      .testimonials .post-category {
          font-size: 16px;
          color: color-mix(in srgb, var(--default-color), transparent 50%);
          margin-bottom: 10px;
      }

      .testimonials .title {
          font-size: 20px;
          font-weight: 700;
          padding: 0;
          margin: 0 0 20px 0;
      }

      .testimonials .post-author {
          font-weight: 600;
          margin-bottom: 5px;
      }

      .testimonials .post-date {
          font-size: 14px;
          color: color-mix(in srgb, var(--default-color), transparent 50%);
          margin-bottom: 0;
      }
    </style>

    <!-- <section id="testimonials" class="testimonials section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Success Stories</h2>
        <p>Where Innovation Meets Success</p>

      <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper" id="swiper-wrapper-9c7a64342fe292c6" aria-live="off" >
            @foreach($recentsuccessstories as $story)
            <div class="swiper-slide" style="width: 371.333px; margin-right: 1px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
              <div class="testimonial-item">
                <div class="post-img">
                  <a href="{{ route('index.single-success-story', $story->slug) }}" target=""><img src="{{ asset('images/success-stories/' . $story->image) }}" alt="{{ $story->title }}" class="img-fluid"></a>
                </div>

                <h2 class="title">
                  <a href="{{ route('index.single-success-story', $story->slug) }}">{{ $story->title }}</a>
                </h2>
                <a href="{{ route('index.single-success-story', $story->slug) }}" class="newsroom-item-link" target="">Read more</a>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>

    </section> -->

@endsection

@section('third_party_scripts')

@endsection
