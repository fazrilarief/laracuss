@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ url('assets/images/fazril-ori.jpg') }}" alt="avatar" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 lh-1 text-break">
                                    fazrilarief
                                </div>
                                <div class="color-gray fs-8">
                                    Member since 1 year ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                        <a href="javascript:;" class="btn btn-primary me-4" id="share-profile">Share</a>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-3"> My Discussions</h2>
                        @include('component.card-discussions')
                        @include('component.card-discussions')
                    </div>
                    <div>
                        <h2 class="mb-3">My Answers</h2>
                        <div class="card card-discussions">
                            <div class="row align-items center">
                                <div class="col-2 col-lg-1 text-ceter">
                                    12
                                </div>
                                <div class="col">
                                    <span>Replied to</span>
                                    <span class="fw-bold text-primary">How to add a custom validation in laravel</span>
                                </div>
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
            $('#share-profile').click(function() {
                var copyText = $('#current-url');

                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val())

                var alert = $('#alert');
                alert.removeClass('d-none')

                var alertContainer = alert.find('.container');
                alertContainer.first().text('Link to this profile copied successfully')
            })
        })
    </script>
@endsection
