@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">

            {{-- Header --}}
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0">All Discussions</h2>
                    <p>51,875 Discussions</p>
                </div>
                <a href="{{ route('auth.login.show') }}" class="btn btn-primary">Log In to Create Discussion</a>
            </div>

            <div class="row">

                {{-- Left Content --}}
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    @include('component.card-discussions')
                    @include('component.card-discussions')
                    @include('component.card-discussions')
                </div>

                {{-- Right Content --}}
                <div class="col-12 col-lg-4">
                    <div class="card all-categories">
                        <h3 class="text-center">All Categories</h3>
                        <div>
                            <a href="#">
                                <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                <span class="badge rounded-pill text-bg-light">Facade</span>
                                <span class="badge rounded-pill text-bg-light">Helper</span>
                                <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                <span class="badge rounded-pill text-bg-light">Facade</span>
                                <span class="badge rounded-pill text-bg-light">Helper</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
