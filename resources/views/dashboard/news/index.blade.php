@extends('layouts.app')

@section('title') News | Dashboard @endsection

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
            <div class="col-lg-9">
                @section('page-header') News (Total {{ $allNews->total() ?? 0 }}) @endsection
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">News</h3>
                        <div class="card-tools">
                            <form class="form-inline form-group-lg" action="{{ route('dashboard.news') }}" method="GET">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search news" id="search-param" name="search" value="{{ request('search') }}" required>
                                </div>
                                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                                    <i class="fas fa-search"></i> Search
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewsModal" style="margin-left: 5px;">
                                    <i class="fas fa-plus"></i> Add New News
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th style="width: 25%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allNews as $news)
                                    <tr>
                                        <td>{{ $news->newscategory->name ?? 'N/A' }}</td>
                                        <td>
                                            {{ $news->title }}
                                            <br/>
                                            <small class="text-black-50">{{ Str::limit(strip_tags($news->text), 50) }}</small>
                                        </td>
                                        <td>{{ $news->type }}</td>
                                        <td><small>{{ $news->slug }}</small></td>
                                        <td>
                                            @if($news->image)
                                                <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <img src="https://placehold.co/50x50/cccccc/333333?text=No+Image" alt="No Image" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @endif
                                        </td>
                                        <td align="right">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editNewsModal{{ $news->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteNewsModal{{ $news->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Edit News Modal Code --}}
                                    <div class="modal fade" id="editNewsModal{{ $news->id }}" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel{{ $news->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="editNewsModalLabel{{ $news->id }}">Update News: {{ $news->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route('dashboard.news.update', $news->id) }}" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('POST')

                                                        <div class="form-group mb-3">
                                                            <label for="newsCategoryEdit{{ $news->id }}">News Category</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" id="newsCategoryEdit{{ $news->id }}" name="newscategory_id" required>
                                                                @foreach($newscategories as $category)
                                                                    <option value="{{ $category->id }}" {{ $news->newscategory_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('newscategory_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="title"
                                                                class="form-control"
                                                                value="{{ old('title', $news->title) }}"
                                                                placeholder="News Title" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-newspaper"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="">News Type</label>
                                                            <select name="type" id="" class="form-control" required>
                                                                <option selected disabled>Select News Type</option>
                                                                <option value="News Article" {{ old('type', $news->type) == 1 ? 'selected' : '' }}>News Article</option>
                                                                <option value="Press Release" {{ old('type', $news->type) == 2 ? 'selected' : '' }}>Press Release</option>
                                                                <option value="External Links" {{ old('type', $news->type) == 3 ? 'selected' : '' }}>External Links</option>
                                                            </select>
                                                            @error('type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="slug"
                                                                class="form-control"
                                                                value="{{ old('slug', $news->slug) }}"
                                                                autocomplete="off"
                                                                placeholder="News Slug" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-link"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="newsTextEdit{{ $news->id }}">News Content</label>
                                                            <textarea id="newsTextEdit{{ $news->id }}" name="text" class="form-control summernote-editor" required>{{ old('text', $news->text) }}</textarea>
                                                            @error('text')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="newsImageEdit{{ $news->id }}">News Image: (16:9 should be ideal, max: 2MB)</label><br>
                                                            @if($news->image)
                                                                <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                                                <br>
                                                                <small class="text-muted">Leave blank to keep current image.</small>
                                                            @else
                                                                <small class="text-muted">No image uploaded.</small>
                                                            @endif
                                                            <div class="custom-file mt-2">
                                                                <input type="file" class="custom-file-input" id="newsImageEdit{{ $news->id }}" name="image" accept="image/*">
                                                                <label class="custom-file-label" for="newsImageEdit{{ $news->id }}">Choose new image (optional)</label>
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
                                    {{-- End Edit News Modal Code --}}

                                    {{-- Delete News Modal Code --}}
                                    <div class="modal fade" id="deleteNewsModal{{ $news->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalLabel{{ $news->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="deleteNewsModalLabel{{ $news->id }}">Delete News</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this news item?<br/>
                                                    <center>
                                                        <big><b>{{ $news->title }}</b></big><br/>
                                                        <small>Category: {{ $news->newscategory->name ?? 'N/A' }}</small>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('dashboard.news.delete', $news->id) }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Delete News Modal Code --}}
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No news found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(isset($allNews) && method_exists($allNews, 'links'))
                    {{ $allNews->links() }}
                @endif
            </div>

            {{-- News Category Section --}}
            {{-- News Category Section --}}
            {{-- News Category Section --}}
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">News Categories</h3>
                        <div class="card-tools">
                             <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addNewscategoryModal">
                                <i class="fas fa-plus"></i> Add
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width: 30%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($newscategories as $newscategory)
                                    <tr>
                                        <td>{{ $newscategory->name }}</td>
                                        <td align="right">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editNewscategoryModal{{ $newscategory->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteNewscategoryModal{{ $newscategory->id }}" disabled="">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Edit News Category Modal Code --}}
                                    <div class="modal fade" id="editNewscategoryModal{{ $newscategory->id }}" tabindex="-1" role="dialog" aria-labelledby="editNewscategoryModalLabel{{ $newscategory->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="editNewscategoryModalLabel{{ $newscategory->id }}">Update Category: {{ $newscategory->name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route('dashboard.newscategories.update', $newscategory->id) }}">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('POST')

                                                        <div class="input-group mb-3">
                                                            <input type="text"
                                                                name="name"
                                                                class="form-control"
                                                                value="{{ $newscategory->name }}"
                                                                placeholder="Category Name" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-folder"></span></div>
                                                            </div>
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
                                    {{-- End Edit News Category Modal Code --}}

                                    {{-- Delete News Category Modal Code --}}
                                    <div class="modal fade" id="deleteNewscategoryModal{{ $newscategory->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteNewscategoryModalLabel{{ $newscategory->id }}" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="deleteNewscategoryModalLabel{{ $newscategory->id }}">Delete News Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this news category?<br/>
                                                    <center>
                                                        <big><b>{{ $newscategory->name }}</b></big>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('dashboard.newscategories.delete', $newscategory->id) }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Delete News Category Modal Code --}}
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">No categories found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(isset($newscategories) && method_exists($newscategories, 'links'))
                    {{ $newscategories->links() }}
                @endif
            </div>
        </div>
    </div>

    {{-- Add News Modal Code --}}
    <div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="addNewsModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addNewsModalLabel">Add New News</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.news.store') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <div class="form-group mb-3">
                    <label for="">News Type</label>
                    <select name="type" id="" class="form-control" required>
                        <option selected disabled>Select News Type</option>
                        <option value="1">News Article</option>
                        <option value="2">Press Release</option>
                        <option value="3">External Links</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="newsCategoryAdd">News Category</label>
                    <select class="form-control select2bs4" style="width: 100%;" id="newsCategoryAdd" name="newscategory_id" required>
                        <option value="">Select a Category</option>
                        @foreach($newscategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('newscategory_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="News Title" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-newspaper"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="slug"
                           class="form-control"
                           value="{{ old('slug') }}"
                           autocomplete="off"
                           placeholder="News Slug (e.g., latest-company-update)" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="newsTextAdd">News Content</label>
                    <textarea id="newsTextAdd" name="text" class="form-control summernote-editor" required>{{ old('text') }}</textarea>
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="newsImageAdd">News Image: (16:9 should be ideal, max: 2MB)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="newsImageAdd" name="image" accept="image/*" required>
                        <label class="custom-file-label" for="newsImageAdd">Choose file</label>
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
    {{-- End Add News Modal Code --}}

    {{-- Add News Category Modal Code --}}
    <div class="modal fade" id="addNewscategoryModal" tabindex="-1" role="dialog" aria-labelledby="addNewscategoryModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title" id="addNewscategoryModalLabel">Add New News Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.newscategories.store') }}">
              <div class="modal-body">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           placeholder="Category Name" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-folder-open"></span></div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Save</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    {{-- End Add News Category Modal Code --}}
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

            // Initialize Select2 for newscategory dropdowns
            $('.select2bs4').select2({
                theme: 'bootstrap4',
                dropdownParent: $('#addNewsModal, #editNewsModal{{ $news->id ?? '' }}') // Ensure dropdown is visible within modal
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
