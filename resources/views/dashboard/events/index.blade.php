@extends('layouts.app')

@section('title') Events | Dashboard @endsection

@section('third_party_stylesheets')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style type="text/css">
      .select2-selection__choice{
          background-color: rgba(0, 123, 255) !important;
      }
      .note-editor.note-frame .note-editing-area .note-editable {
          min-height: 200px;
      }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"> {{-- Changed to col-lg-12 as there's no category section --}}
                @section('page-header') Events (Total {{ $allEvents->total() ?? 0 }}) @endsection
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Events</h3>
                        <div class="card-tools">
                            <form class="form-inline form-group-lg" action="{{ route('dashboard.events') }}" method="GET">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search events" id="search-param" name="search" value="{{ request('search') }}" required>
                                </div>
                                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                                    <i class="fas fa-search"></i> Search
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addEventModal" style="margin-left: 5px;">
                                    <i class="fas fa-plus"></i> Add New Event
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Address</th>
                                    <th>Registration Link</th>
                                    <th>Image</th>
                                    <th style="width: 15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allEvents as $event)
                                    <tr>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->type }}</td> {{-- Assuming 'type' is a string directly --}}
                                        <td>{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</td>
                                        <td>{{ $event->from_to }}</td>
                                        <td>{{ $event->address }}</td>
                                        <td>
                                            @if($event->reg_url)
                                                <a href="{{ $event->reg_url }}" target="_blank" class="text-primary"><i class="fas fa-external-link-alt"></i> Link</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($event->image)
                                                <img src="{{ asset('images/events/' . $event->image) }}" alt="{{ $event->title }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @endif
                                        </td>
                                        <td align="right">
                                            <button type="button" class="btn btn-primary btn-sm editEventModal" data-toggle="modal" data-target="#editEventModal{{ $event->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteEventModal{{ $event->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Edit Event Modal Code --}}
                                    <div class="modal fade" id="editEventModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel{{ $event->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="editEventModalLabel{{ $event->id }}">Update Event: {{ $event->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route('dashboard.events.update', $event->id) }}" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('POST')

                                                        <!-- Event Type -->
                                                        <div class="form-group mb-3">
                                                            <label for="eventTypeEdit{{ $event->id }}">Event Type</label>
                                                            <select name="type" id="eventTypeEdit{{ $event->id }}" class="form-control" required>
                                                                <option selected disabled value="">Select Event Type</option>
                                                                <option value="Webinar" {{ old('type', $event->type) == 'Webinar' ? 'selected' : '' }}>Webinar</option>
                                                                <option value="Conference" {{ old('type', $event->type) == 'Conference' ? 'selected' : '' }}>Conference</option>
                                                                <option value="Workshop" {{ old('type', $event->type) == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                                                <option value="Seminar" {{ old('type', $event->type) == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                                                                <option value="Other" {{ old('type', $event->type) == 'Other' ? 'selected' : '' }}>Other</option>
                                                            </select>
                                                            @error('type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="title"
                                                                class="form-control"
                                                                value="{{ old('title', $event->title) }}"
                                                                placeholder="Event Title" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-calendar-alt"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="date"
                                                                name="event_date"
                                                                class="form-control"
                                                                value="{{ old('event_date', $event->event_date) }}"
                                                                placeholder="Event Date" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-calendar-day"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="from_to"
                                                                class="form-control"
                                                                value="{{ old('from_to', $event->from_to) }}"
                                                                placeholder="Event Time (e.g., 9:00 AM - 5:00 PM EST)" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-clock"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="address"
                                                                class="form-control"
                                                                value="{{ old('address', $event->address) }}"
                                                                placeholder="Event Address (e.g., Online, New York, NY)" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-map-marker-alt"></span></div>
                                                            </div>
                                                        </div>

                                                        <!-- Registration URL -->
                                                        <div class="input-group mb-3">
                                                            <input type="url"
                                                                   name="reg_url"
                                                                   id="regUrlEdit{{ $event->id }}"
                                                                   class="form-control"
                                                                   value="{{ old('reg_url', $event->reg_url ?? '') }}"
                                                                   placeholder="Registration URL (OPTIONAL, e.g., https://example.com/register)">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-external-link-alt"></span></div>
                                                            </div>
                                                        </div>

                                                        <!-- Event Content -->
                                                        <div class="form-group text-group text-group-{{ $event->id }}">
                                                            <label for="eventTextEdit{{ $event->id }}">Event Details</label>
                                                            <textarea id="eventTextEdit{{ $event->id }}" name="text" class="form-control summernote-editor">{{ $event->text }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventImageEdit{{ $event->id }}">Event Image: (16:9 should be ideal, max: 2MB)</label><br>
                                                            @if($event->image)
                                                                <img src="{{ asset('images/events/' . $event->image) }}" alt="{{ $event->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                                <br>
                                                                <small class="text-muted">Leave blank to keep current image.</small>
                                                            @else
                                                                <small class="text-muted">No image uploaded.</small>
                                                            @endif
                                                            <div class="custom-file mt-2">
                                                                <input type="file" class="custom-file-input" id="eventImageEdit{{ $event->id }}" name="image" accept="image/*">
                                                                <label class="custom-file-label" for="eventImageEdit{{ $event->id }}">Choose new image (OPTIONAL)</label>
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
                                    {{-- End Edit Event Modal Code --}}

                                    {{-- Delete Event Modal Code --}}
                                    <div class="modal fade" id="deleteEventModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteEventModalLabel{{ $event->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="deleteEventModalLabel{{ $event->id }}">Delete Event</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this event?<br/>
                                                    <center>
                                                        <big><b>{{ $event->title }}</b></big><br/>
                                                        <small>Date: {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</small>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('dashboard.events.delete', $event->id) }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Delete Event Modal Code --}}
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No events found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(isset($allEvents) && method_exists($allEvents, 'links'))
                    {{ $allEvents->links() }}
                @endif
            </div>
        </div>
    </div>

    {{-- Add Event Modal Code --}}
    <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.events.store') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <div class="form-group mb-3">
                    <label for="eventTypeAdd">Event Type</label>
                    <select name="type" id="eventTypeAdd" class="form-control" required>
                        <option selected disabled value="">Select Event Type</option>
                        <option value="Webinar">Webinar</option>
                        <option value="Conference">Conference</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Seminar">Seminar</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="Event Title" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-calendar-alt"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="date"
                           name="event_date"
                           class="form-control"
                           value="{{ old('event_date') }}"
                           placeholder="Event Date" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-calendar-day"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="from_to"
                           class="form-control"
                           value="{{ old('from_to') }}"
                           placeholder="Event Time (e.g., 9:00 AM - 5:00 PM EST)" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-clock"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="address"
                           class="form-control"
                           value="{{ old('address') }}"
                           placeholder="Event Address (e.g., Online, New York, NY)" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map-marker-alt"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="url"
                           name="reg_url"
                           id="regUrlAdd"
                           class="form-control"
                           value="{{ old('reg_url') }}"
                           placeholder="Registration URL (OPTIONAL, e.g., https://example.com/register)">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-external-link-alt"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="eventTextAdd">Event Details</label>
                    <textarea id="eventTextAdd" name="text" class="form-control summernote-editor">{{ old('text') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="eventImageAdd">Event Image: (16:9 should be ideal, max: 2MB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="eventImageAdd" name="image" accept="image/*" required>
                        <label class="custom-file-label" for="eventImageAdd">Choose file</label>
                    </div>
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
    {{-- End Add Event Modal Code --}}

@endsection

@section('third_party_scripts')
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if ($.fn.summernote) {
                $('.summernote-editor').summernote({
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'strikethrough', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph', 'blockquote']],
                        ['insert', ['link', 'picture', 'table', 'hr']],
                        ['history', ['undo', 'redo']],
                        ['view', ['codeview']],
                        ['misc', ['fullscreen']]
                    ],
                    styleTags: [
                        'p',
                        'h1',
                        'h2',
                        'h3',
                        'h4',
                        'h5',
                        'h6',
                        'blockquote'
                    ],
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue', 'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana', 'Inter'],
                    fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
                    height: 400,
                    dialogsInBody: true
                });
            } else {
                console.error("Summernote is not loaded. Ensure jQuery and Bootstrap 4 JS are loaded before Summernote JS.");
                console.log("Ensure Bootstrap 4 JS is included in your layouts.app before Summernote JS.");
            }

            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        });

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
