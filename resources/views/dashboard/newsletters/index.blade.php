@extends('layouts.app')
@section('title') ড্যাশবোর্ড | নিউজলেটার ইমেইল তালিকা @endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
@endsection

@section('content')
	@section('page-header') নিউজলেটার ইমেইল তালিকা @endsection
    <div class="container-fluid">
		<div class="card">
          <div class="card-header">
            <h3 class="card-title">নিউজলেটার ইমেইল তালিকা তালিকা</h3>

            <div class="card-tools">
            	{{-- <button type="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#addPackageModal" title="" rel="tooltip" data-original-title="নিউজলেটার ইমেইল তালিকা যোগ করুন">
            		<i class="fas fa-clipboard-check"></i> নতুন নিউজলেটার ইমেইল তালিকা
            	</button> --}}
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>নাম</th>
                  <th>যোগাযোগ</th>
                  <th>মেসেজ</th>
                  <th>সময়</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($newsletters as $message)
                	<tr>
                    <td>
                      @if($message->status == 1)
                        <i class="fas fa-calendar-check"></i>
                      @endif
                      
                      @if($message->status == 1)
                        {{ $message->name }}
                      @else
                        <b>{{ $message->name }}</b>
                      @endif
                      
                    </td>
                    <td>
                      @if($message->status == 1)
                        {{ $message->mobile }}
                      @else
                        <b>{{ $message->mobile }}</b>
                      @endif
                    </td>
                    <td>
                      @if($message->status == 1)
                        {{ $message->message }}
                      @else
                        <b>{{ $message->message }}</b>
                      @endif
                    </td>
                    <td>
                      @if($message->status == 1)
                        {{ date('F d, Y h:m A', strtotime($message->created_at)) }}
                      @else
                        <b>{{ date('F d, Y h:m A', strtotime($message->created_at)) }}</b>
                      @endif
                      
                    </td>
                		
                		
                	</tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('third_party_scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        // $('#adduserrole').change(function () {
        //     if($('#adduserrole').val() == 'accountant') {
        //         $('#ifaccountant').hide();
        //     } else {
        //         $('#ifaccountant').show();
        //     }
        // });
    </script>
@endsection