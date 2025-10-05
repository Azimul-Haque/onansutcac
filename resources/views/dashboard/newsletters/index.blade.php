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
                  <th>ইমেইল তালিকা</th>
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
                		
                		<td align="right">
                			<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $message->id }}">
                        <i class="fas fa-trash-alt"></i>
                      </button>
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