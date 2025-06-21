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
      /* Initially hide the newslink field, will be managed by JS */
      .newslink-field {
          display: none;
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
                                    <th>Slug/Link</th>
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
                                        <td>
                                            @if($news->type == 'External Links')
                                                <small><a href="{{ $news->slug }}" target="_blank">Link</a></small> {{-- Assuming slug stores the external link --}}
                                            @else
                                                <small>{{ $news->slug }}</small>
                                            @endif
                                        </td>
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
                                                            <label for="newsTypeEdit{{ $news->id }}">News Type</label>
                                                            <select name="type" id="newsTypeEdit{{ $news->id }}" class="form-control news-type-select" required>
                                                                <option value="News Article" {{ old('type', $news->type) == 'News Article' ? 'selected' : '' }}>News Article</option>
                                                                <option value="Press Release" {{ old('type', $news->type) == 'Press Release' ? 'selected' : '' }}>Press Release</option>
                                                                <option value="External Links" {{ old('type', $news->type) == 'External Links' ? 'selected' : '' }}>External Links</option>
                                                            </select>
                                                            @error('type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-group mb-3 slug-field-edit" data-news-id="{{ $news->id }}" style="display: {{ old('type', $news->type) == 'External Links' ? 'none' : 'flex' }};">
                                                            <input type="text"
                                                                name="slug"
                                                                class="form-control"
                                                                value="{{ old('slug', $news->type != 'External Links' ? $news->slug : '') }}"
                                                                autocomplete="off"
                                                                placeholder="News Slug" {{ old('type', $news->type) == 'External Links' ? '' : 'required' }}>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><span class="fas fa-link"></span></div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group newslink-field-edit" data-news-id="{{ $news->id }}" style="display: {{ old('type', $news->type) == 'External Links' ? 'block' : 'none' }};">
                                                            <label for="newsLinkEdit{{ $news->id }}">News Link</label>
                                                            <input type="url"
                                                                name="newslink"
                                                                class="form-control"
                                                                id="newsLinkEdit{{ $news->id }}"
                                                                value="{{ old('newslink', $news->type == 'External Links' ? $news->slug : '') }}"
                                                                placeholder="https://example.com/news-article" {{ old('type', $news->type) == 'External Links' ? 'required' : '' }}>
                                                            @error('newslink')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group text-field-edit" data-news-id="{{ $news->id }}" style="display: {{ old('type', $news->type) == 'External Links' ? 'none' : 'block' }};">
                                                            <label for="newsTextEdit{{ $news->id }}">News Content</label>
                                                            <textarea id="newsTextEdit{{ $news->id }}" name="text" class="form-control summernote-editor" {{ old('type', $news->type) == 'External Links' ? '' : 'required' }}>{{ old('text', $news->text) }}</textarea>
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

            {{-- News Category Section - 3 Columns --}}
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
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteNewscategoryModal{{ $newscategory->id }}">
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
                                                                value="{{ old('name', $newscategory->name) }}"
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

                <div class="form-group mb-3">
                    <label for="newsTypeAdd">News Type</label>
                    <select name="type" id="newsTypeAdd" class="form-control news-type-select" required>
                        <option value="">Select News Type</option>
                        <option value="News Article" {{ old('type') == 'News Article' ? 'selected' : '' }}>News Article</option>
                        <option value="Press Release" {{ old('type') == 'Press Release' ? 'selected' : '' }}>Press Release</option>
                        <option value="External Links" {{ old('type') == 'External Links' ? 'selected' : '' }}>External Links</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Fields controlled by News Type selection for Add Modal --}}
                <div class="news-fields-container-add">
                    <div class="input-group mb-3 slug-field-add">
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

                    <div class="form-group newslink-field-add">
                        <label for="newsLinkAdd">News Link</label>
                        <input type="url"
                            name="newslink"
                            class="form-control"
                            id="newsLinkAdd"
                            value="{{ old('newslink') }}"
                            placeholder="https://example.com/news-article">
                        @error('newslink')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group text-field-add">
                        <label for="newsTextAdd">News Content</label>
                        <textarea id="newsTextAdd" name="text" class="form-control summernote-editor">{{ old('text') }}</textarea>
                        @error('text')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- End Fields controlled by News Type selection for Add Modal --}}

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
          <div class="modal-header bg-success">
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
                <button type="submit" class="btn btn-success">Save</button>
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
            // Function to handle visibility of fields based on news type
            function toggleNewsFields(modalContext, selectedType) {
                const slugField = $(modalContext).find('.slug-field, .slug-field-edit');
                const textField = $(modalContext).find('.text-field, .text-field-edit');
                const newslinkField = $(modalContext).find('.newslink-field, .newslink-field-edit');
                const newslinkInput = newslinkField.find('input[name="newslink"]');
                const slugInput = slugField.find('input[name="slug"]');
                const textSummernote = textField.find('.summernote-editor');

                if (selectedType === 'External Links') {
                    slugField.hide();
                    textField.hide();
                    newslinkField.show();

                    newslinkInput.prop('required', true);
                    slugInput.prop('required', false);
                    textSummernote.prop('required', false);

                    if (textSummernote.data('summernote')) {
                        textSummernote.summernote('destroy');
                    }
                } else {
                    slugField.show();
                    textField.show();
                    newslinkField.hide();

                    newslinkInput.prop('required', false);
                    slugInput.prop('required', true);
                    textSummernote.prop('required', true);


                    if (!textSummernote.data('summernote')) {
                         textSummernote.summernote({
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
                                'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote'
                            ],
                            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue', 'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana', 'Inter'],
                            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
                            height: 400,
                            dialogsInBody: true
                        });
                    }
                }
            }

            // Initialize Summernote for new/edit modals (initial load for non-external links)
            if ($.fn.summernote) {
                // Initialize Summernote on all applicable textareas initially
                $('.summernote-editor').not('[data-initialized]').each(function() {
                    $(this).summernote({
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
                            'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote'
                        ],
                        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue', 'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana', 'Inter'],
                        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
                        height: 400,
                        dialogsInBody: true
                    }).attr('data-initialized', 'true');
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

            // Initialize Select2 for newscategory dropdowns in Add modal
            $('#newsCategoryAdd').select2({
                theme: 'bootstrap4',
                dropdownParent: $('#addNewsModal')
            });

            // Handle News Type change for Add Modal
            $('#newsTypeAdd').on('change', function() {
                toggleNewsFields('#addNewsModal', $(this).val());
            });

            // Set initial state for Add News Modal on load
            // This is crucial for when the page first loads and an old('type') value might exist
            toggleNewsFields('#addNewsModal', $('#newsTypeAdd').val());


            // For dynamic modals (Edit Modals)
            $('div[id^="editNewsModal"]').on('shown.bs.modal', function() {
                const modalContext = this; // 'this' refers to the modal DOM element
                const newsTypeId = $(modalContext).find('.news-type-select');

                // Initialize Select2 for the specific modal's category dropdown
                $(modalContext).find('.select2bs4').select2({
                    theme: 'bootstrap4',
                    dropdownParent: $(modalContext)
                });

                // Set initial state for Edit News Modal when shown
                toggleNewsFields(modalContext, newsTypeId.val());

                // Handle News Type change for this specific Edit Modal
                newsTypeId.off('change').on('change', function() {
                    toggleNewsFields(modalContext, $(this).val());
                });
            });

            // When an edit modal is hidden, ensure Summernote is re-initialized for it if it was destroyed
            // This ensures Summernote functions correctly if the modal is reopened with a different type
            $('div[id^="editNewsModal"]').on('hidden.bs.modal', function () {
                const modalContext = this;
                const textSummernote = $(modalContext).find('.summernote-editor');
                const newsTypeSelect = $(modalContext).find('.news-type-select');

                // Re-initialize Summernote if it's currently hidden and the type is not "External Links"
                // Or if it was destroyed because the type *was* external links
                if (!textSummernote.data('summernote') && newsTypeSelect.val() !== 'External Links') {
                     textSummernote.summernote({
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
                            'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote'
                        ],
                        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue', 'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana', 'Inter'],
                        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
                        height: 400,
                        dialogsInBody: true
                    }).attr('data-initialized', 'true');
                }
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
        });
    </script>
@endsection