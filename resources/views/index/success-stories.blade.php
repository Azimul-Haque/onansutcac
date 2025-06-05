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

    


@endsection

@section('third_party_scripts')

@endsection