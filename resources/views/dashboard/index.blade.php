@extends('layouts.app')
@section('title') Dashboard @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
	@section('page-header') Dashboard @endsection
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <a href="{{ route('dashboard.users') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Users</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.team-data') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users-cog"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Team Data</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-info-circle"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Meta Data</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-address-card"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Abouts Data</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cube"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Products</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-line"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Markets</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-newspaper"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">News</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar-alt"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Events</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-trophy"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Success Stories</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-handshake"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Clients</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comment-alt"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Testimonials</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-info-circle"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Information Center</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-question-circle"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Help Center/FAQ</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>

          <div class="col-md-3">
              <a href="{{ route('dashboard.products') }}" class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-pie"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Statistics</span>
                      <small class="info-box-text" style="margin-top: 10px;">View More</small>
                  </div>
              </a>
          </div>
        </div>

        @if(Auth::user()->role == 'admin')
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-warning" data-toggle="modal" data-target="#clearQueryCacheModal">
              <i class="fas fa-tools"></i> Clear all query caches (API)
            </button>
            {{-- Modal Code --}}
            {{-- Modal Code --}}
            <!-- Modal -->
            <div class="modal fade" id="clearQueryCacheModal" tabindex="-1" role="dialog" aria-labelledby="clearQueryCacheModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="clearQueryCacheModalLabel">Clear Query Caches</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to clear all query caches?<br/>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('dashboard.clearquerycache') }}" class="btn btn-warning">Clear Caches</a>
                    </div>
                </div>
                </div>
            </div>
            {{-- Modal Code --}}
            {{-- Modal Code --}}
            <br/>
            <br/>
          </div>
        </div>
        @endif
        <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">ব্যবহারকারী যোগদানের হার</h3>
                <div class="card-tools">
                  <small>সর্বশেষ দুই সপ্তাহ</small>
                </div>
              </div>
              <div class="card-body">
              <div class="chart">
                <canvas id="lineChart" style="min-height: 250px; height: 300px; max-height: 400px; max-width: 100%;"></canvas>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ক্রমবর্ধমান ব্যবহারকারী সংখ্যা</h3>
                <div class="card-tools">
                  <small>সর্বশেষ দুই সপ্তাহ</small>
                </div>
              </div>
              <div class="card-body">
              <div class="chart">
                <canvas id="lineChart2" style="min-height: 250px; height: 300px; max-height: 400px; max-width: 100%;"></canvas>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('third_party_scripts')
  
@endsection