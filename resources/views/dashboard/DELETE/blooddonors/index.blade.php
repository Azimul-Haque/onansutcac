@extends('layouts.app')
@section('title') ড্যাশবোর্ড | রক্তদাতা প্রতিষ্ঠান/ব্লাড ব্যাংক @endsection

@section('third_party_stylesheets')
   {{--  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.min.css') }}"> --}}
    <style type="text/css">
      .blink_me {
        animation: blinker 1.5s linear infinite;
      }

      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
    </style>
@endsection

@section('content')
  @section('page-header') রক্তদাতা প্রতিষ্ঠান/ব্লাড ব্যাংক (মোট {{ bangla($blooddonorscount) }} টি) @endsection
    <div class="container-fluid">
    <div class="card">
          <div class="card-header">
            <h3 class="card-title">রক্তদাতা প্রতিষ্ঠান/ব্লাড ব্যাংক</h3>

            <div class="card-tools">
              
              <form class="form-inline form-group-lg" action="">
                @if(Auth::user()->role == 'admin')
                <div class="form-group">
                  <input type="search-param" class="form-control form-control-sm" placeholder="রক্তদাতা প্রতিষ্ঠান খুঁজুন" id="search-param" required>
                </div>
                <button type="button" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> খুঁজুন
                </button>
                @endif
                {{-- <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#addBulkDate" style="margin-left: 5px;">
                  <i class="fas fa-calendar-alt"></i> বাল্ক মেয়াদ বাড়ান
                </button> --}}
                <button type="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#addUserModal" style="margin-left: 5px;">
                  <i class="fas fa-plus-square"></i> নতুন
                </button>
              </form>
              
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>নাম</th>
                  <th>সদস্য</th>
                  <th>লোকেশন</th>
                  <th align="right">কার্যক্রম</th>
                </tr>
              </thead>
              <tbody>
                @foreach($blooddonors as $blooddonor)
                  <tr>
                    <td>
                      {{ $blooddonor->name }}
                      <small class="text-black-50"><i class="fas fa-phone"></i> {{ $blooddonor->mobile }}</small><br/>
                      <span class="badge @if($blooddonor->category == 2) bg-primary @else bg-success @endif">{{ blooddonor_category($blooddonor->category) }}</span>
                    </td>
                    <td>
                      @if($blooddonor->category == 2)
                        <a href="{{ route('dashboard.blooddonormembers', $blooddonor->id) }}" class="badge badge-warning" title="সদস্য যোগ করতে বা এডিট করতে ক্লিক করুন" class=""><big><strong>সদস্য তালিকা দেখুন ({{ bangla($blooddonor->blooddonormembers->count()) }})</strong></big></a>
                      @endif
                    </td>
                    <td>
                      {{ $blooddonor->upazilla->name_bangla }}, {{ $blooddonor->district->name_bangla }}
                    </td>
                    <td align="right">
                      {{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#notifModal{{ $blooddonor->id }}">
                        <i class="fas fa-bell"></i>
                      </button> --}}
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editUserModal{{ $blooddonor->id }}">
                        <i class="fas fa-edit"></i>
                      </button>
                      {{-- Edit User Modal Code --}}
                      {{-- Edit User Modal Code --}}
                      <!-- Modal -->
                      <div class="modal fade" id="editUserModal{{ $blooddonor->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title" id="editUserModalLabel">রক্তদাতা প্রতিষ্ঠান/ব্লাড ব্যাংক তথ্য হালনাগাদ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="post" action="{{ route('dashboard.blooddonors.update', $blooddonor->id) }}">
                              <div class="modal-body">
                                
                                    @csrf

                                    @if(Auth::user()->role == 'admin')
                                    <div class="input-group mb-3">
                                      <select name="district_id" id="district" class="form-control district" required>
                                          <option selected="" disabled="" value="">জেলা নির্বাচন করুন</option>
                                          @foreach($districts as $district)
                                            <option value="{{ $district->id }}" @if($district->id == $blooddonor->district_id) selected @endif>{{ $district->name_bangla }}</option>
                                          @endforeach
                                      </select>
                                      <div class="input-group-append">
                                          <div class="input-group-text"><span class="fas fa-map"></span></div>
                                      </div>
                                    </div>
                                    <div class="input-group mb-3">
                                      <select name="upazilla_id" id="upazilla" class="form-control upazilla" required>
                                          <option selected="" value="{{ $blooddonor->upazilla_id }}">{{ $blooddonor->upazilla->name_bangla }}</option>
                                      </select>
                                      <div class="input-group-append">
                                          <div class="input-group-text"><span class="fas fa-map-marked-alt"></span></div>
                                      </div>
                                    </div>
                                    @else
                                    জেলা: {{ Auth::user()->district->name_bangla }}
                                    <input type="hidden" name="district_id" value="{{ Auth::user()->district_id }}">
                                    <div class="input-group mb-3" style="margin-top: 15px;">
                                      <select name="upazilla_id" id="upazilla" class="form-control upazilla" required>
                                          <option selected="" value="{{ $blooddonor->upazilla_id }}">{{ $blooddonor->upazilla->name_bangla }}</option>
                                      </select>
                                      <div class="input-group-append">
                                          <div class="input-group-text"><span class="fas fa-map-marked-alt"></span></div>
                                      </div>
                                    </div>
                                    @endif


                                    <div class="input-group mb-3">
                                        <input type="text"
                                               name="name"
                                               class="form-control"
                                               value="{{ $blooddonor->name }}"
                                               placeholder="রক্তদাতাের নাম" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-hospital"></span></div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                      <select name="category" class="form-control" required>
                                          <option selected="" disabled="" value="">রক্তদাতা প্রতিষ্ঠানের ধরন</option>
                                          <option value="1" @if($blooddonor->category == 1) selected @endif>ব্লাড ব্যাংক</option>
                                          <option value="2" @if($blooddonor->category == 2) selected @endif>রক্তদাতা সংগঠন</option>
                                      </select>
                                      <div class="input-group-append">
                                          <div class="input-group-text"><span class="fas fa-star-half-alt"></span></div>
                                      </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number"
                                               name="mobile"
                                               value="{{ $blooddonor->mobile }}"
                                               autocomplete="off"
                                               class="form-control"
                                               placeholder="মোবাইল নম্বর" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-mobile"></span></div>
                                        </div>
                                    </div>    
                                    <textarea class="form-control" name="description" placeholder="বক্স এর জন্য বার্তা লিখুন (Optional)">{{ $blooddonor->description }}</textarea>        
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
                                <button type="submit" class="btn btn-primary">দাখিল করুন</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      {{-- Edit User Modal Code --}}
                      {{-- Edit User Modal Code --}}

                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $blooddonor->id }}">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                        {{-- Delete User Modal Code --}}
                        {{-- Delete User Modal Code --}}
                        <!-- Modal -->
                        <div class="modal fade" id="deleteUserModal{{ $blooddonor->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteUserModalLabel">রক্তদাতা প্রতিষ্ঠান ডিলেট</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                আপনি কি নিশ্চিতভাবে এই রক্তদাতা প্রতিষ্ঠানকে ডিলেট করতে চান?<br/>
                                <center>
                                    <big><b>{{ $blooddonor->name }}</b></big><br/>
                                    <small><i class="fas fa-phone"></i> {{ $blooddonor->mobile }}</small>
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
                                <a href="{{ route('dashboard.blooddonors.delete', $blooddonor->id) }}" class="btn btn-danger">ডিলেট করুন</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Delete User Modal Code --}}
                        {{-- Delete User Modal Code --}}
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        {{ $blooddonors->links() }}
    </div>

    {{-- Add User Modal Code --}}
    {{-- Add User Modal Code --}}
    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addUserModalLabel">নতুন রক্তদাতা প্রতিষ্ঠান/ব্লাড ব্যাংক যোগ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.blooddonors.store') }}">
            <div class="modal-body">
              
                  @csrf

                  @if(Auth::user()->role == 'admin')
                  <div class="input-group mb-3">
                    <select name="district_id" id="district" class="form-control district" required>
                        <option selected="" disabled="" value="">জেলা নির্বাচন করুন</option>
                        @foreach($districts as $district)
                          <option value="{{ $district->id }}">{{ $district->name_bangla }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map"></span></div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <select name="upazilla_id" id="upazilla" class="form-control upazilla" required>
                        <option selected="" disabled="" value="">উপজেলা নির্বাচন করুন</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map-marked-alt"></span></div>
                    </div>
                  </div>
                  @else
                  জেলা: {{ Auth::user()->district->name_bangla }}
                  <input type="hidden" name="district_id" value="{{ Auth::user()->district_id }}">
                  <div class="input-group mb-3" style="margin-top: 15px;">
                    <select name="upazilla_id" id="upazilla" class="form-control upazilla" required>
                        <option selected="" disabled="" value="">উপজেলা নির্বাচন করুন</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map-marked-alt"></span></div>
                    </div>
                  </div>
                  @endif


                  <div class="input-group mb-3">
                      <input type="text"
                             name="name"
                             class="form-control"
                             value="{{ old('name') }}"
                             placeholder="রক্তদাতা প্রতিষ্ঠানের নাম" required>
                      <div class="input-group-append">
                          <div class="input-group-text"><span class="fas fa-hospital"></span></div>
                      </div>
                  </div>
                  <div class="input-group mb-3">
                    <select name="category" class="form-control" required>
                        <option selected="" disabled="" value="">রক্তদাতা প্রতিষ্ঠানের ধরন</option>
                        <option value="1">ব্লাড ব্যাংক</option>
                        <option value="2">রক্তদাতা সংগঠন</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-star-half-alt"></span></div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                      <input type="number"
                             name="mobile"
                             value="{{ old('mobile') }}"
                             autocomplete="off"
                             class="form-control"
                             placeholder="মোবাইল নম্বর" required>
                      <div class="input-group-append">
                          <div class="input-group-text"><span class="fas fa-mobile"></span></div>
                      </div>
                  </div>
                  <textarea class="form-control" name="description" placeholder="বক্স এর জন্য বার্তা লিখুন (Optional)">{{ old('description') }}</textarea>           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
              <button type="submit" class="btn btn-success">দাখিল করুন</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- Add User Modal Code --}}
    {{-- Add User Modal Code --}}

@endsection

@section('third_party_scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">

        $('.district').on('change', function() {
          $('.upazilla').prop('disabled', true);
          $('.upazilla').append('<option value="" selected disabled>উপজেলা লোড হচ্ছে...</option>');

          $.ajax({
            url: "/api/getupazillas/{{ env('SOFT_TOKEN') }}/" +$(this).val(), 
            type: "GET",
            success: function(result){
              $('.upazilla')
                  .find('option')
                  .remove()
                  .end()
                  .prop('disabled', false)
                  .append('<option value="" selected disabled>উপজেলা নির্ধারণ করুন</option>')
              ;
              for(var countupazilla = 0; countupazilla < result.length; countupazilla++) {
                console.log(result[countupazilla]);
                $('.upazilla').append('<option value="'+result[countupazilla]['id']+'">'+result[countupazilla]['name_bangla']+'</option>')
              }
            }
          });
        });

        @if(Auth::user()->role == 'editor' || Auth::user()->role == 'manager')
          $('.upazilla').prop('disabled', true);
          $('.upazilla').append('<option value="" selected disabled>উপজেলা লোড হচ্ছে...</option>');

          $.ajax({
            url: "/api/getupazillas/{{ env('SOFT_TOKEN') }}/" +{{ Auth::user()->district_id }}, 
            type: "GET",
            success: function(result){
              $('.upazilla')
                  .find('option')
                  .remove()
                  .end()
                  .prop('disabled', false)
                  .append('<option value="" selected disabled>উপজেলা নির্ধারণ করুন</option>')
              ;
              for(var countupazilla = 0; countupazilla < result.length; countupazilla++) {
                console.log(result[countupazilla]);
                $('.upazilla').append('<option value="'+result[countupazilla]['id']+'">'+result[countupazilla]['name_bangla']+'-'+result[countupazilla]['name']+'</option>')
              }
            }
          });
        @endif

        $(document).on('click', '#search-button', function() {
          if($('#search-param').val() != '') {
            var urltocall = '{{ route('dashboard.blooddonors') }}' +  '/' + $('#search-param').val();
            location.href= urltocall;
          } else {
            $('#search-param').css({ "border": '#FF0000 2px solid'});
            Toast.fire({
                icon: 'warning',
                title: 'কিছু লিখে খুঁজুন!'
            })
          }
        });
        $("#search-param").keyup(function(e) {
          if(e.which == 13) {
            if($('#search-param').val() != '') {
              var urltocall = '{{ route('dashboard.blooddonors') }}' +  '/' + $('#search-param').val();
              location.href= urltocall;
            } else {
              $('#search-param').css({ "border": '#FF0000 2px solid'});
              Toast.fire({
                  icon: 'warning',
                  title: 'কিছু লিখে খুঁজুন!'
              })
            }
          }
        });
    </script>
@endsection