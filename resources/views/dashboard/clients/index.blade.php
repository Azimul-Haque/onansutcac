@extends('layouts.app')

@section('title') Clients & Collaborators | Dashboard @endsection

@section('third_party_stylesheets')
    {{-- No specific stylesheets needed for the remaining fields --}}
@endsection

@section('content')
    @section('page-header') Clients & Collaborators (Total {{ $clientsCount ?? 0 }}) @endsection
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Clients</h3>

                <div class="card-tools">
                    <form class="form-inline form-group-lg" action="{{ route('dashboard.clients') }}" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search clients" id="search-param" name="search" value="{{ request('search') }}" required>
                        </div>
                        <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                            <i class="fas fa-search"></i> Search
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addClientModal" style="margin-left: 5px;">
                            <i class="fas fa-plus"></i> Add New Client
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th style="width: 40%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clients as $client)
                            <tr>
                                <td>
                                    {{ $client->name }}
                                </td>
                                <td>
                                    @if($client->image)
                                        <img src="{{ asset('images/clients/' . $client->image) }}" alt="{{ $client->name }}" class="img-thumbnail" style="width: 200px; height: 70px; object-fit: cover;">
                                    @else
                                        <img src="https://placehold.co/200x70/cccccc/3223313?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 200px; height: 70px; object-fit: cover;">
                                    @endif
                                </td>
                                <td align="right">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editClientModal{{ $client->id }}">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteClientModal{{ $client->id }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>

                                {{-- Edit Modal for each client --}}
                                <div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel{{ $client->id }}" aria-hidden="true" data-backdrop="static">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="editClientModalLabel{{ $client->id }}">Update Client: {{ $client->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{ route('dashboard.clients.update', $client->id) }}" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('POST')

                                                    <div class="input-group mb-3">
                                                        <input type="text"
                                                            name="name"
                                                            class="form-control"
                                                            value="{{ old('name', $client->name) }}"
                                                            placeholder="Client Name" required>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="clientImageEdit{{ $client->id }}">Client Image: (400px : 141px should be ideal, max: 300KB)</label><br>
                                                        @if($client->image)
                                                            <img src="{{ asset('images/clients/' . $client->image) }}" alt="{{ $client->name }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                            <br>
                                                            <small class="text-muted">Leave blank to keep current image.</small>
                                                        @else
                                                            <small class="text-muted">No image uploaded.</small>
                                                        @endif
                                                        <div class="custom-file mt-2">
                                                            <input type="file" class="custom-file-input" id="clientImageEdit{{ $client->id }}" name="image" accept="image/*">
                                                            <label class="custom-file-label" for="clientImageEdit{{ $client->id }}">Choose new image (optional)</label>
                                                        </div>
                                                        @error('image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Delete Modal for each client --}}
                                <div class="modal fade" id="deleteClientModal{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteClientModalLabel{{ $client->id }}" aria-hidden="true" data-backdrop="static">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title" id="deleteClientModalLabel{{ $client->id }}">Delete Client</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this client?<br/>
                                                <center>
                                                    <big><b>{{ $client->name }}</b></big><br/>
                                                </center>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="{{ route('dashboard.clients.delete', $client->id) }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No clients found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if(isset($clients) && method_exists($clients, 'links'))
            {{ $clients->links() }}
        @endif
    </div>

    {{-- Add Modal for new clients --}}
    <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="addClientModalLabel">Add New Client/ Collaborator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('dashboard.clients.store') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name') }}"
                                    placeholder="Client Name" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="clientImageAdd">Client Image: (400px : 141px should be ideal, max: 300KB)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="clientImageAdd" name="image" accept="image/*" required>
                                <label class="custom-file-label" for="clientImageAdd">Choose file</label>
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('third_party_scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Update the label for the file input on change
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        });

        // Search functionality
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
