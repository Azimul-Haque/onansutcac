@extends('layouts.app')

@section('title') Abouts | Dashboard @endsection

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
    @section('page-header') Abouts (Total {{ $aboutsCount ?? 0 }}) @endsection
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Abouts</h3>

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="{{ route('dashboard.abouts') }}" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Search by page location" id="search-param" name="search" value="{{ request('search') }}" required>
                </div>
                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> Search
                </button>
                @if(Auth::user()->email == "orbachinujbuk@gmail.com")
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addAboutModal" style="margin-left: 5px;">
                  <i class="fas fa-plus"></i> Add New About Entry
                </button>
                @endif
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Page Location</th>
                    <th>Content</th>
                    <th style="width: 25%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($abouts as $about)
                    <tr>
                        <td>{{ $about->page_location }}</td>
                        <td>
                            <small class="text-black-50">{{ Str::limit(strip_tags($about->content), 100) }}</small>
                        </td>
                        <td align="right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAboutModal{{ $about->id }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAboutModal{{ $about->id }}">
                                <i class="fas fa-trash"></i> Delete
                            </button> --}}
                        </td>

                        <div class="modal fade" id="editAboutModal{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="editAboutModalLabel{{ $about->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="editAboutModalLabel{{ $about->id }}">Update About Entry for: {{ $about->page_location }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="{{ route('dashboard.abouts.update', $about->id) }}">
                                      <div class="modal-body">
                                          @csrf
                                          @method('POST')

                                          <div class="input-group mb-3">
                                              <input type="text"
                                                            name="page_location"
                                                            class="form-control"
                                                            value="{{ old('page_location', $about->page_location) }}"
                                                            placeholder="Page Location" required>
                                              <div class="input-group-append">
                                                  <div class="input-group-text"><span class="fas fa-file-alt"></span></div>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label for="aboutContentEdit{{ $about->id }}">Content</label>
                                              <textarea id="aboutContentEdit{{ $about->id }}" name="content" class="form-control summernote-editor" required>{{ old('content', $about->content) }}</textarea>
                                              @error('content')
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
                        <div class="modal fade" id="deleteAboutModal{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteAboutModalLabel{{ $about->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteAboutModalLabel{{ $about->id }}">Delete About Entry</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete this about entry?<br/>
                                <center>
                                    <big><b>{{ $about->page_location }}</b></big>
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ route('dashboard.abouts.delete', $about->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No about entries found.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        @if(isset($abouts) && method_exists($abouts, 'links'))
            {{ $abouts->links() }}
        @endif
    </div>

    <div class="modal fade" id="addAboutModal" tabindex="-1" role="dialog" aria-labelledby="addAboutModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addAboutModalLabel">Add New About Entry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.abouts.store') }}">
              <div class="modal-body">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                               name="page_location"
                               class="form-control"
                               value="{{ old('page_location') }}"
                               placeholder="Page Location" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-file-alt"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="aboutContentAdd">Content</label>
                    <textarea id="aboutContentAdd" name="content" class="form-control summernote-editor" required>{{ old('content') }}</textarea>
                    @error('content')
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
                    height: 300,
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
