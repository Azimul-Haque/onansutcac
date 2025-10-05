@extends('layouts.app')
@section('title') Dashboard | Newsletter Email List @endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
@endsection

@section('content')
	@section('page-header') Newsletter Email List @endsection
    <div class="container-fluid">
		<div class="card">
          <div class="card-header">
            <h3 class="card-title">Newsletter Email List তালিকা</h3>

            <div class="card-tools">
            	
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
                <tr>
                  <td>
                    <textarea class="form-control" id="newsletterslist">@foreach($newsletters as $newsletter){{ $newsletter->email }},@endforeach</textarea>
                  </td>
                  
                  <td align="right">
                    <button type="button" id="newsletterbutton" class="btn btn-primary btn-sm">
                      <i class="fas fa-clipboard"></i> Copy
                    </button>
                  </td>
                </tr>
                
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
    <script>
    $(document).ready(function() {
        $('#newsletterbutton').click(function() {
            // Get the textarea element
            var textarea = $('#newsletterslist');

            // Select all text inside the textarea
            textarea.select();

            // Copy the selected text to clipboard
            document.execCommand('copy');

            Toast.fire({
              icon: 'success',
              title: 'Email list copied to clipboard!'
            })
        });
    });
    </script>
@endsection