@extends('layouts.app')
@section('title') ড্যাশবোর্ড | ব্যবহারকারীগণ @endsection

@section('third_party_stylesheets')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script> --}}
    <style type="text/css">
      .select2-selection__choice{
          background-color: rgba(0, 123, 255) !important;
      }
    </style>
@endsection

@section('content')
	@section('page-header') ব্যবহারকারীগণ (মোট {{ bangla($userscount) }} জন) @endsection
    <div class="container-fluid">
		<div class="card">
          <div class="card-header">
            <h3 class="card-title">ব্যবহারকারীগণ</h3>
            {{-- <small><a href="{{ route('dashboard.userssort')  }}" style="margin-left: 5px;">সর্বোচ্চ পরীক্ষার্থী</a></small>
            <small><a href="{{ route('dashboard.expiredusers')  }}" style="margin-left: 5px;">মেয়াদোত্তীর্ণ পরীক্ষার্থী</a></small> --}}

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="ব্যবহারকারী খুঁজুন" id="search-param" required>
                </div>
                <button type="button" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> খুঁজুন
                </button>
                <button type="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#addUserModal" style="margin-left: 5px;">
                  <i class="fas fa-user-plus"></i> নতুন
                </button>
              </form>
            	
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <tbody>
                {{-- <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-danger">55%</span></td>
                </tr> --}}
                @foreach($users as $user)
                	<tr>
                		<td>
                			<a href="#!">{{ $user->name }}</a>
                      
                			<br/>
                            {{-- {{ $user->balances2 }} --}}
                			<small class="text-black-50">{{ $user->mobile }}</small> 
                			<span class="badge @if($user->role == 'admin') bg-success @elseif($user->role == 'editor') bg-warning @else bg-info @endif">{{ role_bangla($user->role) }}</span>
                		</td>
                		<td align="right" width="40%">
                      {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#smsModal{{ $user->id }}">
                        <i class="fas fa-envelope"></i>
                      </button> --}}
                      {{-- SMS Modal Code --}}
                      {{-- SMS Modal Code --}}
                      <!-- Modal -->
                      <div class="modal fade" id="smsModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="smsModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <h5 class="modal-title" id="smsModalLabel">এসএমএস পাঠান</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="post" action="{{ route('dashboard.users.singlesms', $user->id) }}">
                              <div class="modal-body">
                                    @csrf
                                    <textarea class="form-control" placeholder="মেসেজ লিখুন" name="message" style="min-height: 150px; resize: none;" required></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
                                <button type="submit" class="btn btn-info">মেসেজ পাঠান</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      {{-- SMS Modal Code --}}
                      {{-- SMS Modal Code --}}
                      {{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#notifModal{{ $user->id }}">
                        <i class="fas fa-bell"></i>
                      </button> --}}
                      {{-- Notif Modal Code --}}
                      {{-- Notif Modal Code --}}
                      <!-- Modal -->
                      <div class="modal fade" id="notifModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="notifModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-warning">
                              <h5 class="modal-title" id="notifModalLabel">নোটিফিকেশন পাঠান</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="post" action="{{ route('dashboard.users.singlenotification', $user->id) }}">
                              <div class="modal-body">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text"
                                               name="headings"
                                               class="form-control"
                                               placeholder="হেডিংস" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-file-alt"></span></div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text"
                                               name="message"
                                               class="form-control"
                                               placeholder="মেসেজ" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-spa"></span></div>
                                        </div>
                                    </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
                                <button type="submit" class="btn btn-warning">দাখিল করুন</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      {{-- Notif Modal Code --}}
                      {{-- Notif Modal Code --}}

                			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editUserModal{{ $user->id }}">
                				<i class="fas fa-user-edit"></i>
                			</button>
            			    {{-- Edit User Modal Code --}}
            			    {{-- Edit User Modal Code --}}
            			    <!-- Modal -->
            			    <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true" data-backdrop="static">
            			      <div class="modal-dialog modal-lg" role="document">
            			        <div class="modal-content">
            			          <div class="modal-header bg-primary">
            			            <h5 class="modal-title" id="editUserModalLabel">ব্যবহারকারী তথ্য হালনাগাদ</h5>
            			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			              <span aria-hidden="true">&times;</span>
            			            </button>
            			          </div>
            			          <form method="post" action="{{ route('dashboard.users.update', $user->id) }}">
            				          <div class="modal-body">
            				            
            				                @csrf

            				                <div class="input-group mb-3">
            				                    <input type="text"
            				                           name="name"
            				                           class="form-control"
            				                           value="{{ $user->name }}"
            				                           placeholder="নাম" required>
            				                    <div class="input-group-append">
            				                        <div class="input-group-text"><span class="fas fa-user"></span></div>
            				                    </div>
            				                </div>

            				                <div class="input-group mb-3">
            				                    <input type="text"
            				                           name="mobile"
            				                           value="{{ $user->mobile }}"
            				                           autocomplete="off"
            				                           class="form-control"
            				                           placeholder="মোবাইল নম্বর (১১ ডিজিট)" required>
            				                    <div class="input-group-append">
            				                        <div class="input-group-text"><span class="fas fa-phone"></span></div>
            				                    </div>
            				                </div>

            				                <div class="input-group mb-3">
            				                	<select name="role" class="form-control" required>
            				                		<option disabled="" value="">ধরন নির্ধারণ করুন</option>
            				                		<option value="admin" @if($user->role == 'admin') selected="" @endif>এডমিন</option>
              													<option value="editor" @if($user->role == 'editor') selected="" @endif>জেলা এডমিন</option>
                                        <option value="manager" @if($user->role == 'manager') selected="" @endif>প্রতিষ্ঠান ম্যানেজার</option>
                                        {{-- <option value="volunteer" @if($user->role == 'volunteer') selected="" @endif>ভলান্টিয়ার</option>
              													<option value="user" @if($user->role == 'user') selected="" @endif>ব্যবহারকারী</option> --}}
              													{{-- <option value="accountant" @if($user->role == 'accountant') selected="" @endif>একাউন্টেন্ট</option> --}}
            				                	</select>
            				                    <div class="input-group-append">
            				                        <div class="input-group-text"><span class="fas fa-user-secret"></span></div>
            				                    </div>
            				                </div>

                                    <select name="district_id" id="district" class="form-control district select21" data-placeholder="জেলা নির্বাচন করুন" required>
                                        <option selected="" disabled="" value="">জেলা নির্বাচন করুন</option>
                                        @foreach($districts as $district)
                                          <option value="{{ $district->id }}" @if($district->id == $user->district_id) selected @endif>{{ $district->name_bangla }}-{{ $district->name }}</option>
                                        @endforeach
                                    </select>

                                    <div style="margin-bottom: 15px; margin-top: 15px;">
                                      <select name="hospitals[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে হাসপাতালের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]">
                                          @foreach($hospitals as $hospital)
                                            <option value="{{ $hospital->id }}" @if($user->accessibleHospitals->contains($hospital)) selected @endif>{{ $hospital->name }} - ({{ $hospital->upazilla->name_bangla }}, {{ $hospital->district->name_bangla }})</option>
                                          @endforeach
                                      </select>
                                    </div>

                                    <div style="margin-bottom: 15px;">
                                      <select name="doctors[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে ডাক্তারের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                                          @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}" @if($user->accessibleDoctors->contains($doctor)) selected @endif>{{ $doctor->name }} - ({{ $doctor->upazilla->name_bangla }}, {{ $doctor->district->name_bangla }})</option>
                                          @endforeach
                                      </select>
                                    </div>

                                    <div style="margin-bottom: 15px;">
                                      <select name="blooddonors[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে রক্তদাতা/সংগঠনের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                                          @foreach($blooddonors as $blooddonor)
                                            <option value="{{ $blooddonor->id }}" @if($user->accessibleBlooddonors->contains($blooddonor)) selected @endif>{{ $blooddonor->name }} - ({{ $blooddonor->upazilla->name_bangla }}, {{ $blooddonor->district->name_bangla }})</option>
                                          @endforeach
                                      </select>
                                    </div>

                                    <div style="margin-bottom: 15px;">
                                      <select name="coachings[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে শিক্ষা প্রতিষ্ঠানের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                                          @foreach($coachings as $coaching)
                                            <option value="{{ $coaching->id }}" @if($user->accessibleCoachings->contains($coaching)) selected @endif>{{ $coaching->name }} - ({{ $coaching->district->name_bangla }})</option>
                                          @endforeach
                                      </select>
                                    </div>



            				                <div class="input-group mb-3">
            				                    <input type="password"
            				                           name="password"
            				                           class="form-control"
            				                           autocomplete="new-password"
            				                           placeholder="পাসওয়ার্ড (ঐচ্ছিক)">
            				                    <div class="input-group-append">
            				                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
            				                    </div>
            				                </div>
            				            
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

                      @if($user->role != 'admin')
                			<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $user->id }}">
                				<i class="fas fa-user-minus"></i>
                			</button>
                      @endif
                		</td>
                        {{-- Delete User Modal Code --}}
                        {{-- Delete User Modal Code --}}
                        <!-- Modal -->
                        <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteUserModalLabel">ব্যবহারকারী ডিলেট</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                আপনি কি নিশ্চিতভাবে এই ব্যবহারকারীকে ডিলেট করতে চান?<br/>
                                <center>
                                    <big><b>{{ $user->name }}</b></big><br/>
                                    <small><i class="fas fa-phone"></i> {{ $user->mobile }}</small>
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ফিরে যান</button>
                                <a href="{{ route('dashboard.users.delete', $user->id) }}" class="btn btn-danger">ডিলেট করুন</a>
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
        {{ $users->links() }}
    </div>

    {{-- Add User Modal Code --}}
    {{-- Add User Modal Code --}}
    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addUserModalLabel">নতুন ব্যবহারকারী যোগ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.users.store') }}" enctype="multipart/form-data">
	          <div class="modal-body">
	            
	                @csrf

	                <div class="input-group mb-3">
	                    <input type="text"
	                           name="name"
	                           class="form-control"
	                           value="{{ old('name') }}"
	                           placeholder="নাম" required>
	                    <div class="input-group-append">
	                        <div class="input-group-text"><span class="fas fa-user"></span></div>
	                    </div>
	                </div>

	                <div class="input-group mb-3">
	                    <input type="text"
	                           name="mobile"
	                           value="{{ old('mobile') }}"
	                           autocomplete="off"
	                           class="form-control"
	                           placeholder="মোবাইল নম্বর (১১ ডিজিট)" required>
	                    <div class="input-group-append">
	                        <div class="input-group-text"><span class="fas fa-phone"></span></div>
	                    </div>
	                </div>

	                <div class="input-group mb-3">
	                	<select name="role" id="adduserrole" class="form-control" required>
	                		<option selected="" disabled="" value="">ধরন</option>
	                		<option value="admin">এডমিন</option>
                     <option value="editor">জেলা এডমিন</option>
                     <option value="manager">প্রতিষ্ঠান ম্যানেজার</option>
                    {{--  <option value="manager">ম্যানেজার</option>
                     <option value="volunteer">ভলান্টিয়ার</option>
	                		<option value="user">ব্যবহারকারী</option> --}}
							{{-- <option value="accountant">একাউন্টেন্ট</option> --}}
	                	</select>
	                    <div class="input-group-append">
	                        <div class="input-group-text"><span class="fas fa-user-secret"></span></div>
	                    </div>
	                </div>

                  <select name="district_id" id="district" class="form-control district select21" data-placeholder="জেলা নির্বাচন করুন" required>
                      <option selected="" disabled="" value="">জেলা নির্বাচন করুন</option>
                      @foreach($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->name_bangla }}-{{ $district->name }}</option>
                      @endforeach
                  </select>

                  <div style="margin-bottom: 15px; margin-top: 15px;">
                    <select name="hospitals[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে হাসপাতালের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                        @foreach($hospitals as $hospital)
                          <option value="{{ $hospital->id }}">{{ $hospital->name }} - ({{ $hospital->upazilla->name_bangla }}, {{ $hospital->district->name_bangla }})</option>
                        @endforeach
                    </select>
                  </div>

                  <div style="margin-bottom: 15px;">
                    <select name="doctors[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে ডাক্তারের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                        @foreach($doctors as $doctor)
                          <option value="{{ $doctor->id }}">{{ $doctor->name }} - ({{ $doctor->upazilla->name_bangla }}, {{ $doctor->district->name_bangla }})</option>
                        @endforeach
                    </select>
                  </div>

                  <div style="margin-bottom: 15px;">
                    <select name="blooddonors[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে রক্তদাতা/সংগঠনের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                        @foreach($blooddonors as $blooddonor)
                          <option value="{{ $blooddonor->id }}">{{ $blooddonor->name }} - ({{ $blooddonor->upazilla->name_bangla }}, {{ $blooddonor->district->name_bangla }})</option>
                        @endforeach
                    </select>
                  </div>

                  <div style="margin-bottom: 15px;">
                    <select name="coachings[]" class="form-control multiple-select" multiple="multiple" data-placeholder="যে যে শিক্ষা প্রতিষ্ঠানের এক্সেস দেওয়া হবে (প্রয়োজনে একাধিক সিলেক্ট করা যাবে) [Optional]" onautocomplete="off">
                        @foreach($coachings as $coaching)
                          <option value="{{ $coaching->id }}">{{ $coaching->name }} - ({{ $coaching->district->name_bangla }})</option>
                        @endforeach
                    </select>
                  </div>


	                <div class="input-group mb-3">
	                    <input type="password"
	                           name="password"
	                           class="form-control"
	                           autocomplete="off"
	                           placeholder="পাসওয়ার্ড" required>
	                    <div class="input-group-append">
	                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
	                    </div>
	                </div>
	            
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
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script type="text/javascript">
      $('.multiple-select').select2({
        // theme: 'bootstrap4',
      });
      $('.select21').select2({
        // theme: 'bootstrap4',
        dropdownParent: $('.modal')
      });

        $('#adduserrole').change(function () {
            if($('#adduserrole').val() == 'accountant') {
                $('#ifaccountant').hide();
            } else {
                $('#ifaccountant').show();
            }
        });


        $(document).on('click', '#search-button', function() {
          if($('#search-param').val() != '') {
            var urltocall = '{{ route('dashboard.users') }}' +  '/' + $('#search-param').val();
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
              var urltocall = '{{ route('dashboard.users') }}' +  '/' + $('#search-param').val();
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