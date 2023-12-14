@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">

            {{-- Breadcrumb --}}
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">Discussions</div>
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">></div>
                    </div>
                    <h2 class="mb-0">{{ $discussion->tittle }}</h2>
                </div>
            </div>
            <div class="row">

                {{-- Left Conten --}}
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div id="alert" class="alert alert-success my-4 rounded-100 d-none">
                        <div class="container">

                        </div>
                    </div>
                    <div class="card card-discussions mb-5 ">
                        <div class="row">
                            <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                <a href="{{ route('discussions.like.like', $discussion->slug) }}">
                                    <img src="{{ $discussion->liked() ? $likedImage : $notLikedImage }}" alt="Like"
                                        class="like-icon mb-1">
                                </a>
                                <span id="discussion-like-count"
                                    class="fs-4 color-gray mb-1">{{ $discussion->likeCount }}</span>
                            </div>
                            <div class="col-11">
                                <p>{!! $discussion->content !!} </p>
                                <div class="mb-3">
                                    <a href="{{ route('discussions.categories.show', $discussion->category->slug) }}">
                                        <span
                                            class="badge rounded-pill text-bg-light">{{ $discussion->category->name }}</span>
                                    </a>
                                </div>
                                <div class="row align-items-start justify-content-between">
                                    <div class="col">
                                        <span class="color-gray me-2">
                                            <a href="javascript:;" id="share-discussion"><small>Share</small></a>
                                            <input type="text" value="{{ route('discussions.show', $discussion->slug) }}"
                                                id="current-url" class="d-none">
                                        </span>

                                        @if ($discussion->user_id === auth()->id())
                                            <span class="color-gray me-2">
                                                <a href="{{ route('discussions.edit', $discussion->slug) }}">
                                                    <small>Edit</small>
                                                </a>
                                            </span>

                                            <form action="{{ route('discussions.destroy', $discussion->slug) }}"
                                                class="d-inline-block lh-1" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="color-gray btn p-0 lh-1"
                                                    id="delete-discussion" onclick="confirm('Delete Discussion ?')">
                                                    <small class="card-discussion-delete-btn">Delete</small>
                                                </button>
                                            </form>
                                        @endif

                                    </div>
                                    <div class="col-5 col-lg-3 d-flex">
                                        <a href="#"
                                            class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1">
                                            <img src="{{ filter_var($discussion->user->picture, FILTER_VALIDATE_URL)
                                                ? $discussion->user->picture
                                                : Storage::url($discussion->user->picture) }}"
                                                alt="avatar" class="avatar">
                                        </a>
                                        <div class="fs-12px lh-1">
                                            <span class="text-primary">
                                                <a href="#" class="fw-bold d-flex align-items-start text-break mb-1">
                                                    {{ $discussion->user->username }}
                                                </a>
                                            </span>
                                            <span class="color-gray">{{ $discussion->created_at->diffforhumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $answerCount = $discussion->answers->count();
                    @endphp
                    <h3 class="">{{ $answerCount . ' ' . Str::plural('Answer', $answerCount) }}</h3>
                    @forelse ($discussionAnswers as $answer)
                        <div class="card card-discussions">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                    <a href="#">
                                        <img src="{{ url('assets/images/ic_like.png') }}" alt="Like"
                                            class="like-icon mb-1">
                                    </a>
                                    <span class="fs-4 color-gray mb-1">0</span>
                                </div>
                                <div class="col-11">
                                    <p>
                                        {!! $answer->answer !!}
                                    </p>
                                    <div class="row align-items-end justify-content-end">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="#"
                                                class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1">
                                                <img src="{{ filter_var($answer->user->picture, FILTER_VALIDATE_URL) ? $answer->user->picture : Storage::url($answer->user->picture) }}"
                                                    alt="avatar" class="avatar">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span
                                                    class="{{ $answer->user->username === $discussion->user->username ? 'text-primary' : '' }}">
                                                    <a href="#"
                                                        class="fw-bold d-flex align-items-start text-break mb-1">
                                                        {{ $answer->user->username }}
                                                    </a>
                                                </span>
                                                <span class="color-gray">{{ $answer->created_at->diffforhumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-discussions">
                            <div class="row">
                                Currently no answer yet.
                            </div>
                        </div>
                    @endforelse

                    @auth
                        <h3 class="mt-5">
                            Your Answer
                        </h3>
                        <div class="card card-discussions">
                            <form action="{{ route('discussions.answer.store', $discussion->slug) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <textarea name="answer" id="answer">{{ old('answer') }}</textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary me-4" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    @endauth
                    @guest
                        <div class="fw-bold text-center pt-4 mt-4">
                            Please <a href="{{ route('auth.login.show') }}" class="text-primary">sign in</a> or <a
                                href="{{ route('auth.sign-up.show') }}" class="text-primary">create an account</a> to
                            participate in this
                            discussion.
                        </div>
                    @endguest
                </div>

                {{-- Rigth Content --}}
                <div class="col-12 col-lg-4">
                    <div class="card all-categories">
                        <h3 class="text-center">All Categories</h3>
                        <div class="mb-3">
                            @foreach ($categories as $category)
                                <a href="{{ route('discussions.categories.show', $category->slug) }}">
                                    <span class="badge rounded-pill text-bg-light">{{ $category->name }}</span>
                                </a>
                            @endforeach
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
            $('#share-discussion').click(function() {
                var copyText = $('#current-url');

                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val());

                var alert = $('#alert');
                alert.removeClass('d-none')

                var alertContainer = alert.find('.container');
                alertContainer.first().text('Link to this discussions copied');
            })

            $('#answer').summernote({
                placeholder: 'Write your solution here',
                tabSize: 2,
                height: 220,
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

            $('#discussion-like').click(function() {
                var isLiked = $(this).data('liked');
                var likeRoute = isLiked ? '{{ route('discussions.like.unlike', $discussion->slug) }}' :
                    '{{ route('discussions.like.like', $discussion->slug) }}';

                $.ajax({
                        method: 'POST',
                        url: likeRoute,
                        data: {
                            '_token': '{{ csrf_token() }}'
                        }
                    })
                    .done(function(res) {
                        if (res.status === 'success') {
                            $('#discussion-like-count').text(res.data.likeCount);

                            if (isLiked) {
                                $('#discussion-like-icon').attr('src', '{{ $notLikedImage }}');
                            } else {
                                $('#discussion-like-icon').attr('src', '{{ $likedImage }}');
                            }

                            $('#discussion-like').data('liked', !isLiked);
                        }
                    })
            });
        })
    </script>
@endsection
