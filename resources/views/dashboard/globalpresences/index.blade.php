@extends('layouts.app')

@section('title') Global Presence | Dashboard @endsection

@section('third_party_stylesheets')

<style type="text/css">
textarea {
min-height: 200px;
}
</style>

@endsection

@section('content')
@section('page-header') Global Presences (Total {{ $globalpresences->total() ?? 0 }}) @endsection
<div class="container-fluid">
<div class="card">
<div class="card-header">
<h3 class="card-title">Global Presences</h3>

            <div class="card-tools">
                <form class="form-inline form-group-lg" action="{{ route('dashboard.global-presence') }}" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Search Locations" id="search-param" name="search" value="{{ request('search') }}" required>
                    </div>
                    <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                        <i class="fas fa-search"></i> Search
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addGlobalPresenceModal" style="margin-left: 5px;">
                        <i class="fas fa-plus"></i> Add New
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Place Name</th>
                        <th>Location URL</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th style="width: 20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($globalpresences as $globalPresence)
                        <tr>
                            <td>{{ $globalPresence->placename }}</td>
                            <td><a href="{{ $globalPresence->locationurl }}" target="_blank">{{ Str::limit($globalPresence->locationurl, 50) }}</a></td>
                            <td>{{ $globalPresence->lat }}</td>
                            <td>{{ $globalPresence->lng }}</td>
                            <td align="right">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editGlobalPresenceModal{{ $globalPresence->id }}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>

                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteGlobalPresenceModal{{ $globalPresence->id }}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="editGlobalPresenceModal{{ $globalPresence->id }}" tabindex="-1" role="dialog" aria-labelledby="editGlobalPresenceModalLabel{{ $globalPresence->id }}" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="editGlobalPresenceModalLabel{{ $globalPresence->id }}">Update Global Presence: {{ $globalPresence->placename }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ route('dashboard.global-presence.update', $globalPresence->id) }}">
                                        <div class="modal-body">
                                            @csrf
                                            @method('POST')

                                            <div class="form-group mb-3">
                                                <label for="placenameEdit{{ $globalPresence->id }}">Place Name</label>
                                                <input type="text" name="placename" id="placenameEdit{{ $globalPresence->id }}" class="form-control" value="{{ old('placename', $globalPresence->placename) }}" placeholder="Placename" required>
                                                @error('placename')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" id="address" class="form-control" value="{{ old('placename', $globalPresence->placename) }}" placeholder="Address" required>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="phone">Place Name</label>
                                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('placename', $globalPresence->placename) }}" placeholder="Phone Number" required>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="email">Place Name</label>
                                                <input type="text" name="email" id="email" class="form-control" value="{{ old('placename', $globalPresence->placename) }}" placeholder="email Address" required>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="locationurlEdit{{ $globalPresence->id }}">Location URL</label>
                                                <input type="url" name="locationurl" id="locationurlEdit{{ $globalPresence->id }}" class="form-control" value="{{ old('locationurl', $globalPresence->locationurl) }}" placeholder="Google Maps URL" required>
                                                @error('locationurl')
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

                        <div class="modal fade" id="deleteGlobalPresenceModal{{ $globalPresence->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteGlobalPresenceModalLabel{{ $globalPresence->id }}" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title" id="deleteGlobalPresenceModalLabel{{ $globalPresence->id }}">Delete Global Presence</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete the location:<br/>
                                        <center>
                                            <big><b>{{ $globalPresence->placename }}</b></big>
                                        </center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="{{ route('dashboard.global-presence.delete', $globalPresence->id) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Global Presences found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ $globalpresences->links() }}
</div>

<div class="modal fade" id="addGlobalPresenceModal" tabindex="-1" role="dialog" aria-labelledby="addGlobalPresenceModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="addGlobalPresenceModalLabel">Add New Global Presence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('dashboard.global-presence.store') }}">
                <div class="modal-body">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="placenameAdd">Place Name</label>
                        <input type="text" name="placename" id="placenameAdd" class="form-control" value="{{ old('placename') }}" placeholder="Placename (e.g. DHAKA, BANGLADESH)" required>
                        @error('placename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" placeholder="Address" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Place Name</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone Number" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="Email">Place Name</label>
                        <input type="text" name="Email" id="Email" class="form-control" value="{{ old('Email') }}" placeholder="Email Address" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="locationurlAdd">Location URL</label>
                        <input type="url" name="locationurl" id="locationurlAdd" class="form-control" value="{{ old('locationurl') }}" placeholder="Google Maps URL" required>
                        @error('locationurl')
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
<script type="text/javascript">
    (document).on('click', '\#search-button', function() {
        if (('#search-param').val() != '') {
        $(this).closest('form').submit();
        } else {
        $('#search-param').css({ "border": '#FF0000 2px solid' });
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
        if (e.which == 13) {
            e.preventDefault();
            $('#search-button').click();
        }
    });
</script>

@endsection