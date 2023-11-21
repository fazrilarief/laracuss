@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="tittle fs-2 fw-bold me-2 mb-0">
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
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="tittle" class="form-label">Tittle</label>
                                        <input type="text" name="tittle" id="tittle" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_slug" class="form-label">Category</label>
                                        <select name="category_slug" id="category" class="form-select">
                                            <option selected disabled>-- Choose One --</option>
                                            <option value="">Eoquent ORM</option>
                                            <option value="">Facade</option>
                                            <option value="">Helper</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Category</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">
                                            Submit
                                        </button>
                                        <a href="">Cancel</a>
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
