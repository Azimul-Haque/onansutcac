@extends('layouts.app')

@section('title') Market | Dashboard @endsection {{-- Changed "Products" to "Market" --}}

@section('third_party_stylesheets')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <!-- Summernote CSS for WYSIWYG editor -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style type="text/css">
      .select2-selection__choice{
          background-color: rgba(0, 123, 255) !important;
      }
      .note-editor.note-frame .note-editing-area .note-editable {
          min-height: 200px; /* Adjust height for the editor */
      }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    @section('page-header') Markets (Total {{ $marketsCount ?? 0 }}) @endsection {{-- Changed "Products" to "Markets", and $productsCount to $marketsCount --}}
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Markets</h3> {{-- Changed "Products" to "Markets" --}}

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="{{ route('dashboard.markets') }}" method="GET"> {{-- Changed route to dashboard.markets --}}
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Search markets" id="search-param" name="search" value="{{ request('search') }}" required> {{-- Changed placeholder to "Search markets" --}}
                </div>
                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> Search
                </button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addMarketModal" style="margin-left: 5px;"> {{-- Changed target to addMarketModal --}}
                  <i class="fas fa-plus"></i> Add New Market
                </button>
              </form>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th style="width: 40%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($markets as $market) {{-- Changed $products to $markets --}}
                    <tr>
                        <td>
                            <a href="{{ route('index.singlemarket', $market->slug) }}" target="_blank">{{ $market->title }}</a> {{-- Changed route to index.singlemarket, and variable to $market --}}
                            <br/>
                            <small class="badge rounded-pill bg-{{ pill_type($market->type) }}">{{ ind_type($market->type) }}</small>
                        </td>
                        <td><small>{{ $market->slug }}</small></td> {{-- Changed $product->slug to $market->slug --}}
                        <td>
                            @if($market->image) {{-- Changed $product->image to $market->image --}}
                                <img src="{{ asset('images/markets/' . $market->image) }}" alt="{{ $market->title }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"> {{-- Changed image path and alt text --}}
                            @else
                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @endif
                        </td>
                        <td align="right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editMarketModal{{ $market->id }}"> {{-- Changed target to editMarketModal and variable to $market->id --}}
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteMarketModal{{ $market->id }}"> {{-- Changed target to deleteMarketModal and variable to $market->id --}}
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>

                        <!-- Edit Market Modal Code -->
                        <div class="modal fade" id="editMarketModal{{ $market->id }}" tabindex="-1" role="dialog" aria-labelledby="editMarketModalLabel{{ $market->id }}" aria-hidden="true" data-backdrop="static"> {{-- Changed ID and label --}}
                          <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="editMarketModalLabel{{ $market->id }}">Update Market: {{ $market->title }}</h5> {{-- Changed title and variable --}}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="{{ route('dashboard.markets.update', $market->id) }}" enctype="multipart/form-data"> {{-- Changed route to dashboard.markets.update and variable --}}
                                        <div class="modal-body">
                                            @csrf
                                            @method('POST')

                                            <div class="input-group mb-3">
                                                <input type="text"
                                                       name="title"
                                                       class="form-control"
                                                       value="{{ old('title', $market->title) }}" {{-- Changed variable to $market->title --}}
                                                       placeholder="Market Title" required> {{-- Changed placeholder --}}
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><span class="fas fa-box"></span></div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text"
                                                       name="slug"
                                                       class="form-control"
                                                       value="{{ old('slug', $market->slug) }}" {{-- Changed variable to $market->slug --}}
                                                       autocomplete="off"
                                                       placeholder="Market Slug" required> {{-- Changed placeholder --}}
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><span class="fas fa-link"></span></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="marketTextEdit{{ $market->id }}">Market Description/Article</label> {{-- Changed label and for attribute --}}
                                                <textarea id="marketTextEdit{{ $market->id }}" name="text" class="form-control summernote-editor" required>{{ old('text', $market->text) }}</textarea> {{-- Changed ID and variable --}}
                                                @error('text')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="marketImageEdit{{ $market->id }}">Market Image: (16:9 should be ideal, max: 2MB)</label><br> {{-- Changed label and for attribute --}}
                                                @if($market->image) {{-- Changed variable --}}
                                                    <img src="{{ asset('images/markets/' . $market->image) }}" alt="{{ $market->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;"> {{-- Changed image path and alt --}}
                                                    <br>
                                                    <small class="text-muted">Leave blank to keep current image.</small>
                                                @else
                                                    <small class="text-muted">No image uploaded.</small>
                                                @endif
                                                <div class="custom-file mt-2">
                                                    <input type="file" class="custom-file-input" id="marketImageEdit{{ $market->id }}" name="image" accept="image/*"> {{-- Changed ID --}}
                                                    <label class="custom-file-label" for="marketImageEdit{{ $market->id }}">Choose new image (optional)</label> {{-- Changed for attribute --}}
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
                        <!-- End Edit Market Modal Code -->
                        <!-- Delete Market Modal Code -->
                        <div class="modal fade" id="deleteMarketModal{{ $market->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteMarketModalLabel{{ $market->id }}" aria-hidden="true" data-backdrop="static"> {{-- Changed ID and label --}}
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteMarketModalLabel{{ $market->id }}">Delete Market</h5> {{-- Changed title and label --}}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete this market?<br/> {{-- Changed text --}}
                                <center>
                                    <big><b>{{ $market->title }}</b></big><br/> {{-- Changed variable --}}
                                    <small>Slug: {{ $market->slug }}</small> {{-- Changed variable --}}
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ route('dashboard.markets.delete', $market->id) }}" class="btn btn-danger">Delete</a> {{-- Changed route and variable --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Delete Market Modal Code -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No markets found.</td> {{-- Changed text --}}
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        @if(isset($markets) && method_exists($markets, 'links')) {{-- Changed $products to $markets --}}
            {{ $markets->links() }} {{-- Changed $products to $markets --}}
        @endif
    </div>

    <!-- Add Industry Modal Code -->
    <div class="modal fade" id="addMarketModal" tabindex="-1" role="dialog" aria-labelledby="addMarketModalLabel" aria-hidden="true" data-backdrop="static"> {{-- Changed ID and label --}}
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addMarketModalLabel">Add New Industry</h5> {{-- Changed title and label --}}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.markets.store') }}" enctype="multipart/form-data"> {{-- Changed route to dashboard.markets.store --}}
              <div class="modal-body">
                @csrf

                <div class="form-group mb-3">
                    <label for="">Select Type</label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="" selected disabled>Select Type</option>
                        <option value="1">Industry</option>
                        <option value="2">Project</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="Industry/Project Title" required> {{-- Changed placeholder --}}
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-box"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="slug"
                           class="form-control"
                           value="{{ old('slug') }}"
                           autocomplete="off"
                           placeholder="Industry/Project Slug (e.g., my-awesome-market)" required> {{-- Changed placeholder --}}
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="marketTextAdd">Industry/Project Description/Article</label> {{-- Changed label and for attribute --}}
                    <textarea id="marketTextAdd" name="text" class="form-control summernote-editor" required>{{ old('text') }}</textarea> {{-- Changed ID --}}
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="marketImageAdd">Industry/Project Image: (16:9 should be ideal, max: 2MB)</label> {{-- Changed label --}}
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="marketImageAdd" name="image" accept="image/*" required> {{-- Changed ID --}}
                        <label class="custom-file-label" for="marketImageAdd">Choose file</label> {{-- Changed for attribute --}}
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
    <!-- End Add Market Modal Code -->
@endsection

@section('third_party_scripts')
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <!-- Summernote JS for WYSIWYG editor -->
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
                    height: 400, // Set the height of the editor area for extra large modal
                    dialogsInBody: true
                });
            } else {
                console.error("Summernote is not loaded. Ensure jQuery and Bootstrap 4 JS are loaded before Summernote JS.");
                console.log("Ensure Bootstrap 4 JS is included in your layouts.app before Summernote JS.");
            }

            // Handle custom file input label update
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
