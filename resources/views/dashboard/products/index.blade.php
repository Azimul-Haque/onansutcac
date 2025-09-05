@extends('layouts.app')

@section('title') Products/Technologies | Dashboard @endsection

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
    @section('page-header') Products/Technologies (Total {{ $totalproducts ?? 0 }}) @endsection {{-- Use $totalproducts from controller --}}
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Products/Technologies</h3>

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="{{ route('dashboard.products') }}" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Search products/technologies" id="search-param" name="search" value="{{ request('search') }}" required>
                </div>
                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> Search
                </button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addProductModal" style="margin-left: 5px;">
                  <i class="fas fa-plus"></i> Add New Product/Technology
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
                @forelse($products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('index.singleproduct', $product->slug) }}" target="_blank">{{ $product->title }}</a>
                            <br/>
                            <small class="badge rounded-pill bg-{{ pill_type($product->type) }}">{{ prod_type($product->type) }}</small>
                            @if($product->isfeatured == 1)
                                <small class="badge rounded-pill bg-warning"><i class="fas fa-check"></i> Featured</small>
                            @endif
                        </td>
                        <td><small>{{ $product->slug }}</small></td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->title }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @endif
                        </td>
                        <td align="right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editProductModal{{ $product->id }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProductModal{{ $product->id }}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>

                        <!-- Edit Product Modal Code -->
                        <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="editProductModalLabel{{ $product->id }}">Update Product: {{ $product->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="{{ route('dashboard.products.update', $product->id) }}" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        @method('POST') {{-- Use PUT method for updates --}}

                                        

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Select Type</label>
                                                    <select name="type" id="type" class="form-control" required>
                                                        <option selected disabled>Select Type</option>
                                                        <option value="1" @if($product->type == 1) selected @endif>Product</option>
                                                        <option value="2" @if($product->type == 2) selected @endif>Technology</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Select Featured or not</label>
                                                    <select name="isfeatured" id="isfeatured" class="form-control" required>
                                                        <option selected disabled>Featured or not</option>
                                                        <option value="1" @if($product->isfeatured == 1) selected @endif>Featured</option>
                                                        <option value="0" @if($product->isfeatured == 0) selected @endif>Not featured</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text"
                                                   name="title"
                                                   class="form-control"
                                                   value="{{ old('title', $product->title) }}"
                                                   placeholder="Product Title" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><span class="fas fa-box"></span></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           name="slug"
                                                           class="form-control"
                                                           value="{{ old('slug', $product->slug) }}"
                                                           autocomplete="off"
                                                           placeholder="Product Slug" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <input type="number"
                                                           name="serial"
                                                           class="form-control"
                                                           value="{{ old('serial', $market->serial) }}"
                                                           autocomplete="off"
                                                           placeholder="Industry/Project Serial (1, 2, 3, etc.)" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><span class="fas fa-briefcase"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="productTextEdit{{ $product->id }}">Product Description/Article</label>
                                            <textarea id="productTextEdit{{ $product->id }}" name="text" class="form-control summernote-editor" required>{{ old('text', $product->text) }}</textarea>
                                            @error('text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="productImageEdit{{ $product->id }}">Product Image: (16:9 should be ideal, max: 2MB)</label><br>
                                            @if($product->image)
                                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                <br>
                                                <small class="text-muted">Leave blank to keep current image.</small>
                                            @else
                                                <small class="text-muted">No image uploaded.</small>
                                            @endif
                                            <div class="custom-file mt-2">
                                                <input type="file" class="custom-file-input" id="productImageEdit{{ $product->id }}" name="image" accept="image/*">
                                                <label class="custom-file-label" for="productImageEdit{{ $product->id }}">Choose new image (optional)</label>
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
                        <!-- End Edit Product Modal Code -->
                        <!-- Delete Product Modal Code -->
                        <div class="modal fade" id="deleteProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel{{ $product->id }}" aria-hidden="true" data-backdrop="static">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="deleteProductModalLabel{{ $product->id }}">Delete Product/Technology</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete this Product/Technology?<br/>
                                <center>
                                    <big><b>{{ $product->title }}</b></big><br/>
                                    <small>Slug: {{ $product->slug }}</small>
                                </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ route('dashboard.products.delete', $product->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Delete Product Modal Code -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No products found.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        @if(isset($products) && method_exists($products, 'links'))
            {{ $products->links() }} {{-- Pagination links --}}
        @endif
    </div>

    <!-- Add Product Modal Code -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.products.store') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Select Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="" selected disabled>Select Type</option>
                                <option value="1">Product</option>
                                <option value="2">Technology</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Select Featured or not</label>
                            <select name="isfeatured" id="isfeatured" class="form-control" required>
                                <option value="" selected disabled>Featured or not</option>
                                <option value="1">Featured</option>
                                <option value="0">Not featured</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="Product Title" required>
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
                           placeholder="Product Slug (e.g., my-awesome-product)" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="productTextAdd">Product Description/Article</label>
                    <textarea id="productTextAdd" name="text" class="form-control summernote-editor" required>{{ old('text') }}</textarea>
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="productImageAdd">Product Image: (16:9 should be ideal, max: 2MB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="productImageAdd" name="image" accept="image/*" required>
                        <label class="custom-file-label" for="productImageAdd">Choose file</label>
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
    <!-- End Add Product Modal Code -->
@endsection

@section('third_party_scripts')
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <!-- Summernote JS for WYSIWYG editor -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    
    <script type="text/javascript">
        // Ensure jQuery is loaded before attempting to initialize Summernote
        // Also ensure Bootstrap 4's JavaScript is loaded in your layouts.app
        
        // Ensure jQuery and Summernote are loaded before this script runs
        $(document).ready(function() {
            if ($.fn.summernote) {
                $('.summernote-editor').summernote({
                    toolbar: [
                        // Styles (Paragraph, H1-H6, Blockquote)
                        ['style', ['style']],

                        // Basic Text Formatting (Bold, Italic, Strikethrough, Underline, Clear formatting)
                        ['font', ['bold', 'italic', 'strikethrough', 'underline', 'clear']],

                        // Font Family and Font Size
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],

                        // Text Color and Background Color
                        ['color', ['color']],

                        // Paragraph Formatting (Lists, Indent/Outdent, Alignments)
                        ['para', ['ul', 'ol', 'paragraph', 'blockquote']],

                        // Insert Options (Link, Picture, Table, Horizontal Line)
                        ['insert', ['link', 'picture', 'table', 'hr']],

                        // History (Undo/Redo)
                        ['history', ['undo', 'redo']],

                        // Code View
                        ['view', ['codeview']],

                        // Fullscreen Toggle
                        ['misc', ['fullscreen']] // Add fullscreen option for convenience
                    ],
                    styleTags: [ // Define the styles available in the 'style' dropdown
                        'p',
                        'h1',
                        'h2',
                        'h3',
                        'h4',
                        'h5',
                        'h6',
                        'blockquote'
                    ],
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue', 'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana', 'Inter'], // Example font names
                    fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'], // Example font sizes
                    height: 200, // Set the height of the editor area
                    dialogsInBody: true, // Prevents modals from being cut off if inside other modals
                    callbacks: {
                        // You can add callbacks here for custom functionalities if needed, e.g., image upload
                        // onImageUpload: function(files) {
                        //     // Handle image upload logic here
                        // }
                    }
                });
            } else {
                console.error("Summernote is not loaded. Ensure jQuery and Bootstrap 4 JS are loaded before Summernote JS.");
            }

            // Existing custom file input label update
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        });


        // Search functionality
        $(document).on('click', '#search-button', function() {
            if($('#search-param').val() != '') {
                // The form action already handles the GET request, so just submit the form
                $(this).closest('form').submit();
            } else {
                $('#search-param').css({ "border": '#FF0000 2px solid'});
                // Assuming Toast.fire is defined globally or included
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
            if(e.which == 13) { // Enter key
                e.preventDefault(); // Prevent default form submission
                $('#search-button').click(); // Trigger the search button click
            }
        });
    </script>
@endsection
