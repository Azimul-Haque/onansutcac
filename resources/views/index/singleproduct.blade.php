@extends('layouts.index')
@section('title') Title 1 | Products @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Product</h1>
        <p>Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Product Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    


    


@endsection

@section('third_party_scripts')

@endsection