@extends('layouts.app')

@section('title') Success Stories | Dashboard @endsection

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
            <div class="col-lg-12">
                @section('page-header') Success Stories (Total {{ $allSuccessStories->total() ?? 0 }}) @endsection
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Success Stories</h3>
                        <div class="card-tools">
                            <form class="form-inline form-group-lg" action="{{ route('dashboard.success_stories') }}" method="GET">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search stories" id="search-param" name="search" value="{{ request('search') }}" required>
                                </div>
                                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                                    <i class="fas fa-search"></i> Search
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSuccessStoryModal" style="margin-left: 5px;">
                                    <i class="fas fa-plus"></i> Add New Story
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
                                    <th>File</th>
                                    <th>Image</th>
                                    <th>Text (Snippet)</th>
                                    <th style="width: 15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allSuccessStories as $successStory)
                                    <tr>
                                        <td>{{ $successStory->title }}</td>
                                        <td>{{ $successStory->type }}</td>
                                        <td>
                                            @if($successStory->file)
                                                <a href="{{ Storage::url('files/success_stories/' . $successStory->file) }}" target="_blank" class="text-primary"><i class="fas fa-file"></i> View File</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($successStory->image)
                                                <img src="{{ asset('images/success_stories/' . $successStory->image) }}" alt="{{ $successStory->title }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @endif
                                        </td>
                                        <td>{{ Str::limit(strip_tags($successStory->text), 100) }}</td>
                                        <td align="right">
                                            <button type="button" class="btn btn-primary btn-sm editSuccessStoryModal" data-toggle="modal" data-target="#editSuccessStoryModal{{ $successStory->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteSuccessStoryModal{{ $successStory->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Edit Success Story Modal Code --}}
                                    <div class="modal fade" id="editSuccessStoryModal{{ $successStory->id }}" tabindex="-1" role="dialog" aria-labelledby="editSuccessStoryModalLabel{{ $successStory->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="editSuccessStoryModalLabel{{ $successStory->id }}">Update Success Story: {{ $successStory->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route('dashboard.success_stories.update', $successStory->id) }}" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('POST')

                                                        <!-- Type Field -->
                                                        <div class="form-group mb-3">
                                                            <label for="successStoryTypeEdit{{ $successStory->id }}">Type</label>
                                                            <select name="type" id="successStoryTypeEdit{{ $successStory->id }}" class="form-control success-story-type-select" data-success-story-id="{{ $successStory->id }}" required>
                                                                <option selected disabled value="">Select Type</option>
                                                                <option value="Case Study" {{ old('type', $successStory->type) == 'Case Study' ? 'selected' : '' }}>Case Study</option>
                                                                <option value="Client Testimonial" {{ old('type', $successStory->type) == 'Client Testimonial' ? 'selected' : '' }}>Client Testimonial</option>
                                                                <option value="Project Highlight" {{ old('type', $successStory->type) == 'Project Highlight' ? 'selected' : '' }}>Project Highlight</option>
                                                                <option value="Research Outcome" {{ old('type', $successStory->type) == 'Research Outcome' ? 'selected' : '' }}>Research Outcome</option>
                                                                <option value="Other" {{ old('type', $successStory->type) == 'Other' || !in_array($successStory->type, ['Case Study', 'Client Testimonial', 'Project Highlight', 'Research Outcome']) ? 'selected' : '' }}>Other (Write Yourself)</option>
                                                            </select>
                                                            @error('type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <!-- Custom Type Field (Initially Hidden) -->
                                                        <div id="customTypeFieldWrapperEdit{{ $successStory->id }}" class="input-group mb-3" style="display: {{ old('type', $successStory->type) == 'Other' || !in_array($successStory->type, ['Case Study', 'Client Testimonial', 'Project Highlight', 'Research Outcome']) ? 'flex' : 'none' }};">
                                                            <input type="text"
                                                                   name="custom_type"
                                                                   id="customTypeEdit{{ $successStory->id }}"
                                                                   class="form-control"
                                                                   value="{{ old('custom_type', in_array($successStory->type, ['Case Study', 'Client Testimonial', 'Project Highlight', 'Research Outcome']) ? '' : $successStory->type) }}"
                                                                   placeholder="Enter Custom Type">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-tag"></span></div>
                                                            </div>
                                                            @error('custom_type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="title"
                                                                class="form-control"
                                                                value="{{ old('title', $successStory->title) }}"
                                                                placeholder="Story Title" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-book"></span></div>
                                                            </div>
                                                        </div>

                                                        <!-- Associated File -->
                                                        <div class="form-group mb-3">
                                                            <label for="successStoryFileEdit{{ $successStory->id }}">Associated File (Optional - PDF, Word, Excel; max 3MB)</label><br>
                                                            @if($successStory->file)
                                                                <p class="mb-1">Current File: <a href="{{ Storage::url('files/success_stories/' . $successStory->file) }}" target="_blank">{{ $successStory->file }}</a></p>
                                                                <small class="text-muted">Leave blank to keep current file.</small>
                                                            @else
                                                                <small class="text-muted">No file uploaded.</small>
                                                            @endif
                                                            <div class="custom-file mt-2">
                                                                <input type="file" class="custom-file-input" id="successStoryFileEdit{{ $successStory->id }}" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx">
                                                                <label class="custom-file-label" for="successStoryFileEdit{{ $successStory->id }}">Choose new file (optional)</label>
                                                            </div>
                                                            @error('file')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="successStoryImageEdit{{ $successStory->id }}">Image (Optional - 16:9 ideal, max 2MB)</label><br>
                                                            @if($successStory->image)
                                                                <img src="{{ asset('images/success_stories/' . $successStory->image) }}" alt="{{ $successStory->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                                <br>
                                                                <small class="text-muted">Leave blank to keep current image.</small>
                                                            @else
                                                                <small class="text-muted">No image uploaded.</small>
                                                            @endif
                                                            <div class="custom-file mt-2">
                                                                <input type="file" class="custom-file-input" id="successStoryImageEdit{{ $successStory->id }}" name="image" accept="image/*">
                                                                <label class="custom-file-label" for="successStoryImageEdit{{ $successStory->id }}">Choose new image (optional)</label>
                                                            </div>
                                                            @error('image')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <!-- Story Content -->
                                                        <div class="form-group">
                                                            <label for="successStoryTextEdit{{ $successStory->id }}">Story Content</label>
                                                            <textarea id="successStoryTextEdit{{ $successStory->id }}" name="text" class="form-control summernote-editor">{{ $successStory->text }}</textarea>
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
                                    {{-- End Edit Success Story Modal Code --}}

                                    {{-- Delete Success Story Modal Code --}}
                                    <div class="modal fade" id="deleteSuccessStoryModal{{ $successStory->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteSuccessStoryModalLabel{{ $successStory->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="deleteSuccessStoryModalLabel{{ $successStory->id }}">Delete Success Story</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this success story?<br/>
                                                    <center>
                                                        <big><b>{{ $successStory->title }}</b></big><br/>
                                                        <small>Type: {{ $successStory->type }}</small>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('dashboard.success_stories.delete', $successStory->id) }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Delete Success Story Modal Code --}}
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No success stories found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(isset($allSuccessStories) && method_exists($allSuccessStories, 'links'))
                    {{ $allSuccessStories->links() }}
                @endif
            </div>
        </div>
    </div>

    {{-- Add Success Story Modal Code --}}
    <div class="modal fade" id="addSuccessStoryModal" tabindex="-1" role="dialog" aria-labelledby="addSuccessStoryModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addSuccessStoryModalLabel">Add New Success Story</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.success_stories.store') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <!-- Type Field -->
                <div class="form-group mb-3">
                    <label for="successStoryTypeAdd">Type</label>
                    <select name="type" id="successStoryTypeAdd" class="form-control" required>
                        <option selected disabled value="">Select Type</option>
                        <option value="Case Study">Case Study</option>
                        <option value="Client Testimonial">Client Testimonial</option>
                        <option value="Project Highlight">Project Highlight</option>
                        <option value="Research Outcome">Research Outcome</option>
                        <option value="Other">Other (Write Yourself)</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Custom Type Field (Initially Hidden) -->
                <div id="customTypeFieldWrapperAdd" class="input-group mb-3" style="display: none;">
                    <input type="text"
                           name="custom_type"
                           id="customTypeAdd"
                           class="form-control"
                           value="{{ old('custom_type') }}"
                           placeholder="Enter Custom Type">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-tag"></span></div>
                    </div>
                    @error('custom_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="Story Title" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-book"></span></div>
                    </div>
                </div>

                <!-- Associated File -->
                <div class="form-group mb-3">
                    <label for="successStoryFileAdd">Associated File (Optional - PDF, Word, Excel; max 3MB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="successStoryFileAdd" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx">
                        <label class="custom-file-label" for="successStoryFileAdd">Choose file</label>
                    </div>
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="successStoryImageAdd">Image (Optional - 16:9 ideal, max 2MB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="successStoryImageAdd" name="image" accept="image/*">
                        <label class="custom-file-label" for="successStoryImageAdd">Choose file</label>
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="successStoryTextAdd">Story Content</label>
                    <textarea id="successStoryTextAdd" name="text" class="form-control summernote-editor">{{ old('text') }}</textarea>
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
    {{-- End Add Success Story Modal Code --}}

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

            // Handle dynamic 'Other (Write Yourself)' for Add Modal
            $('#successStoryTypeAdd').on('change', function() {
                if ($(this).val() === 'Other') {
                    $('#customTypeFieldWrapperAdd').show();
                    $('#customTypeAdd').prop('required', true);
                } else {
                    $('#customTypeFieldWrapperAdd').hide();
                    $('#customTypeAdd').prop('required', false);
                    $('#customTypeAdd').val(''); // Clear value when hidden
                }
            }).trigger('change'); // Trigger on page load for old('type')

            // Handle dynamic 'Other (Write Yourself)' for Edit Modals
            $('.success-story-type-select').on('change', function() {
                const successStoryId = $(this).data('success-story-id');
                if ($(this).val() === 'Other') {
                    $('#customTypeFieldWrapperEdit' + successStoryId).show();
                    $('#customTypeEdit' + successStoryId).prop('required', true);
                } else {
                    $('#customTypeFieldWrapperEdit' + successStoryId).hide();
                    $('#customTypeEdit' + successStoryId).prop('required', false);
                    $('#customTypeEdit' + successStoryId).val(''); // Clear value when hidden
                }
            }).each(function() {
                 // Trigger change manually on page load to handle pre-selected values
                 // and ensure the custom field is shown/hidden correctly on initial load
                $(this).trigger('change');
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
