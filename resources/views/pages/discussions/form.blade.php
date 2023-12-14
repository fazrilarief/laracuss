@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold me-2 mb-0">
                            Ask a Question
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions mb-5">
                        <div class="row">
                            <div class="col-12">
                                <form
                                    action="{{ isset($discussion) ? route('discussions.update', $discussion->slug) : route('discussions.store') }}"
                                    method="POST">
                                    @csrf

                                    @isset($discussion)
                                        @method('PUT')
                                    @endisset

                                    <div class="mb-3">
                                        <label for="tittle" class="form-label">tittle</label>
                                        <input type="text" class="form-control @error('tittle') is-invalid @enderror"
                                            id="tittle" name="tittle" value="{{ $discussion->tittle ?? old('tittle') }}"
                                            autofocus>
                                        @error('tittle')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_slug" class="form-label">Category</label>
                                        <select class="form-select @error('category_slug') is-invalid @enderror"
                                            name="category_slug" id="category_slug">
                                            <option value="">-- Choose One --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->slug }}"
                                                    @if (($discussion->category->slug ?? old('category_slug')) === $category->slug) {{ 'selected' }} @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_slug')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="content"
                                            class="form-label @error('content') is-invalid @enderror">Question</label>
                                        <textarea class="form-control" id="content" name="content">{{ $discussion->content ?? old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                placeholder: 'Detail your problem | What did you try | whay your expecting',
                tabsize: 2,
                height: 320,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            $('span.note-icon-caret').remove();
        })
    </script>
@endsection
