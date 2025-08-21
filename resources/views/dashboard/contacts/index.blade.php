@extends('layouts.app')

@section('title') Contact Messages | Dashboard @endsection

@section('third_party_stylesheets')
{{-- No custom styles needed for this page --}}
@endsection

@section('content')
    @section('page-header') Contact Messages (Total {{ $messages->total() ?? 0 }}) @endsection
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact Messages</h3>

                <div class="card-tools">
                    <form class="form-inline form-group-lg" action="{{ route('dashboard.contact-messages') }}" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search Messages" id="search-param" name="search" value="{{ request('search') }}" required>
                        </div>
                        <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th style="width: 20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td><small class="text-black-50">{{ Str::limit(strip_tags($message->message), 100) }}</small></td>
                                <td align="right">
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteMessageModal{{ $message->id }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>

                            {{-- Delete Message Modal Code --}}
                            <div class="modal fade" id="deleteMessageModal{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteMessageModalLabel{{ $message->id }}" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title" id="deleteMessageModalLabel{{ $message->id }}">Delete Message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this message?<br/>
                                            <center>
                                                <big><b>From: {{ $message->name }}</b></big><br/>
                                                <small>Subject: {{ $message->subject }}</small>
                                            </center>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{ route('dashboard.messages.delete', $message->id) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Delete Message Modal Code --}}
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No messages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if(isset($messages) && method_exists($messages, 'links'))
            {{ $messages->links() }}
        @endif
    </div>

@endsection

@section('third_party_scripts')

    <script type="text/javascript">
        $(document).on('click', '#search-button', function() {
            if($('#search-param').val() != '') {
                $(this).closest('form').submit();
            } else {
                $('#search-param').css({ "border": '#FF0000 2px solid'});
                if (typeof Toast !== 'undefined') {
                    Toast.fire({
                        icon: 'warning',
                        title: 'Write something!'
                    });
                } else {
                    console.warn('Toast.fire function is not defined. Please include SweetAlert2.');
                }
            }
        });

        $("#search-param").keyup(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                $('#search-button').click();
            }
        });
    </script>
@endsection
