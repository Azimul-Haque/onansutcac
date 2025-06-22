@extends('layouts.app')

@section('title') Help Center | Dashboard @endsection

@section('third_party_stylesheets')


    
@endsection

@section('content')
    @section('page-header') FAQs (Total {{ $faqs->total() ?? 0 }}) @endsection
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">FAQs</h3>

            <div class="card-tools">
              <form class="form-inline form-group-lg" action="{{ route('dashboard.help-center') }}" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Search FAQs" id="search-param" name="search" value="{{ request('search') }}" required>
                </div>
                <button type="submit" id="search-button" class="btn btn-default btn-sm" style="margin-left: 5px;">
                  <i class="fas fa-search"></i> Search
                </button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addFaqModal" style="margin-left: 5px;">
                  <i class="fas fa-plus"></i> Add New FAQ
                </button>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Type</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th style="width: 20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($faqs as $faq)
                    <tr>
                        <td>{{ faq_type($faq->type) }}</td>
                        <td>
                            {{ $faq->question }}
                        </td>
                        <td><small class="text-black-50">{{ Str::limit(strip_tags($faq->answer), 100) }}</small></td>
                        <td align="right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editFaqModal{{ $faq->id }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteFaqModal{{ $faq->id }}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    {{-- Edit FAQ Modal Code --}}
                    <div class="modal fade" id="editFaqModal{{ $faq->id }}" tabindex="-1" role="dialog" aria-labelledby="editFaqModalLabel{{ $faq->id }}" aria-hidden="true" data-backdrop="static">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="editFaqModalLabel{{ $faq->id }}">Update FAQ: {{ $faq->question }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="post" action="{{ route('dashboard.help-center.update', $faq->id) }}">
                                    <div class="modal-body">
                                        @csrf
                                        @method('POST')

                                        <div class="form-group mb-3">
                                            <label for="faqTypeEdit{{ $faq->id }}">Type</label>
                                            <select name="type" id="faqTypeEdit{{ $faq->id }}" class="form-control" required>
                                                <option value="1" {{ old('type', $faq->type) == 1 ? 'selected' : '' }}>General</option>
                                                <option value="2" {{ old('type', $faq->type) == 2 ? 'selected' : '' }}>Technical</option>
                                                <option value="3" {{ old('type', $faq->type) == 3 ? 'selected' : '' }}>Support</option>
                                            </select>
                                            @error('type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text"
                                                name="question"
                                                class="form-control"
                                                value="{{ old('question', $faq->question) }}"
                                                placeholder="FAQ Question" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><span class="fas fa-question-circle"></span></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="faqAnswerEdit{{ $faq->id }}">Answer</label>
                                            <textarea id="faqAnswerEdit{{ $faq->id }}" name="answer" placeholder="Write the Answer" class="form-control" required>{{ old('answer', $faq->answer) }}</textarea>
                                            @error('answer')
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
                    {{-- End Edit FAQ Modal Code --}}

                    {{-- Delete FAQ Modal Code --}}
                    <div class="modal fade" id="deleteFaqModal{{ $faq->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteFaqModalLabel{{ $faq->id }}" aria-hidden="true" data-backdrop="static">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-danger">
                            <h5 class="modal-title" id="deleteFaqModalLabel{{ $faq->id }}">Delete FAQ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete this FAQ item?<br/>
                            <center>
                                <big><b>{{ $faq->question }}</b></big><br/>
                                <small>Type: {{ $faq->type }}</small>
                            </center>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{ route('dashboard.help-center.delete', $faq->id) }}" class="btn btn-danger">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- End Delete FAQ Modal Code --}}
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No FAQs found.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        @if(isset($faqs) && method_exists($faqs, 'links'))
            {{ $faqs->links() }}
        @endif
    </div>

    {{-- Add FAQ Modal Code --}}
    <div class="modal fade" id="addFaqModal" tabindex="-1" role="dialog" aria-labelledby="addFaqModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="addFaqModalLabel">Add New FAQ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('dashboard.help-center.store') }}">
              <div class="modal-body">
                @csrf

                <div class="form-group mb-3">
                    <label for="faqTypeAdd">Type</label>
                    <select name="type" id="faqTypeAdd" class="form-control" required>
                        <option value="">Select Type</option>
                        <option value="1">General</option>
                        <option value="2">Technical</option>
                        <option value="3">Support</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="question"
                           class="form-control"
                           value="{{ old('question') }}"
                           placeholder="FAQ Question" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-question-circle"></span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="faqAnswerAdd">Answer</label>
                    <textarea id="faqAnswerAdd" name="answer" placeholder="Write the Answer" class="form-control" required>{{ old('answer') }}</textarea>
                    @error('answer')
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
    {{-- End Add FAQ Modal Code --}}
@endsection

@section('third_party_scripts')

    <script type="text/javascript">

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
