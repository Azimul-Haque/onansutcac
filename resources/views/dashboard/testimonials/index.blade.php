@extends('layouts.app')

@section('title') Testimonials | Dashboard @endsection

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
    @section('page-header') Testimonials (Total {{ $testimonialsCount ?? 0 }}) @endsection
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Testimonials</h3>

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="{{ route('dashboard.testimonials') }}" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Search testimonials" id="search-param" name="search" value="{{ request('search') }}" required>
                </div>
                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> Search
                </button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addTestimonialModal" style="margin-left: 5px;">
                  <i class="fas fa-plus"></i> Add New Testimonial
                </button>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Rating</th>
                    <th>Text</th>
                    <th>Image</th>
                    <th style="width: 40%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td>
                                {{ $testimonial->name }}
                            <br/>
                            <small class="text-black-50">{{ $testimonial->designation }}</small>
                        </td>
                        <td><small>{{ $testimonial->designation }}</small></td>
                        <td><big>{{ $testimonial->rating }}</big></td>
                        <td><small>{{ Str::limit(strip_tags($testimonial->text), 50) }}</small></td>
                        <td>
                            @if($testimonial->image)
                                <img src="{{ asset('images/testimonials/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @endif
                        </td>
                        <td align="right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editTestimonialModal{{ $testimonial->id }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTestimonialModal{{ $testimonial->id }}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>

                        <div class="modal fade" id="editTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="editTestimonialModalLabel{{ $testimonial->id }}">Update Testimonial: {{ $testimonial->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="{{ route('dashboard.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                                         <div class="modal-body">
                                             @csrf
                                             @method('POST')

                                             <div class="input-group mb-3">
                                                 <input type="text"
                                                            name="name"
                                                            class="form-control"
                                                            value="{{ old('name', $testimonial->name) }}"
                                                            placeholder="Testimonial Name" required>
                                                 <div class="input-group-append">
                                                     <div class="input-group-text"><span class="fas fa-user"></span></div>
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="input-group mb-3">
                                                         <input type="text"
                                                                    name="designation"
                                                                    class="form-control"
                                                                    value="{{ old('designation', $testimonial->designation) }}"
                                                                    autocomplete="off"
                                                                    placeholder="Testimonial Designation" required>
                                                         <div class="input-group-append">
                                                             <div class="input-group-text"><span class="fas fa-briefcase"></span></div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-control" name="rating">
                                                            <option value="" disabled>Select Rating</option>
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>{{ $i }} Star</option>
                                                            @endfor
                                                        </select>
                                                        <div class="input-group-append">
                                                             <div class="input-group-text"><span class="fas fa-star"></span></div>
                                                         </div>
                                                    </div>
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="testimonialTextEdit{{ $testimonial->id }}">Testimonial Text</label>
                                                 <textarea id="testimonialTextEdit{{ $testimonial->id }}" name="text" class="form-control summernote-editor" required>{{ old('text', $testimonial->text) }}</textarea>
                                                 @error('text')
                                                     <span class="text-danger">{{ $message }}</span>
                                                 @enderror
                                             </div>

                                             <div class="form-group">
                                                 <label for="testimonialImageEdit{{ $testimonial->id }}">Testimonial Image: (1:1 should be ideal, max: 300KB)</label><br>
                                                 @if($testimonial->image)
                                                     <img src="{{ asset('images/testimonials/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                     <br>
                                                     <small class="text-muted">Leave blank to keep current image.</small>
                                                 @else
                                                     <small class="text-muted">No image uploaded.</small>
                                                 @endif
                                                 <div class="custom-file mt-2">
                                                     <input type="file" class="custom-file-input" id="testimonialImageEdit{{ $testimonial->id }}" name="image" accept="image/*">
                                                     <label class="custom-file-label" for="testimonialImageEdit{{ $testimonial->id }}">Choose new image (optional)</label>
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
                        <div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteTestimonialModalLabel{{ $testimonial->id }}">Delete Testimonial</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete this testimonial?<br/>
                                <center>
                                    <big><b>{{ $testimonial->name }}</b></big><br/>
                                    <small>Designation: {{ $testimonial->designation }}</small>
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ route('dashboard.testimonials.delete', $testimonial->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No testimonials found.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        @if(isset($testimonials) && method_exists($testimonials, 'links'))
            {{ $testimonials->links() }}
        @endif
    </div>

    <div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addTestimonialModalLabel">Add New Testimonial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.testimonials.store') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Testimonial Name" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text"
                                       name="designation"
                                       class="form-control"
                                       value="{{ old('designation') }}"
                                       autocomplete="off"
                                       placeholder="Testimonial Designation" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-briefcase"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <select class="form-control" name="rating" required>
                                <option value="" selected disabled>Select Rating</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Star</option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                            </select>
                             <div class="input-group-append">
                                 <div class="input-group-text"><span class="fas fa-star"></span></div>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="testimonialTextAdd">Testimonial Text</label>
                    <textarea id="testimonialTextAdd" name="text" class="form-control summernote-editor" required>{{ old('text') }}</textarea>
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="testimonialImageAdd">Testimonial Image: (1:1 should be ideal, max: 300KB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="testimonialImageAdd" name="image" accept="image/*" required>
                        <label class="custom-file-label" for="testimonialImageAdd">Choose file</label>
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
