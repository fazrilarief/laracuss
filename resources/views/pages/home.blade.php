@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="container hero">
        <div class="row align-items-center h-100">
            <div class="col-12 col-lg-6">
                <h1>The Laravel <br> Community Forum</h1>
                <p>Empowering the Laravel community to connect, share and learn.</p>
                @auth
                    <a href="{{ route('discussions.create') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Create Discussion</a>
                    <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
                @endauth
                @guest
                    <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                    <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
                @endguest
            </div>
            <div class="col-12 col-lg-6 order-first order-lg-last mb-3 mb-lg-0 h-315px">
                <img class="hero-image float-lg-end" src="{{ url('assets/images/hero_image.png') }}" alt="#">
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="stats container min-h-372px">
        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/ic_discussions.png') }}" alt="Discussions">
                <h2>Discussion</h2>
                <p class="fs-3">51,875</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/ic_answers.png') }}" alt="Discussions">
                <h2>Answers</h2>
                <p class="fs-3">121,984</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/ic_users.png') }}" alt="Discussions">
                <h2>Users</h2>
                <p class="fs-3">11,675</p>
            </div>
        </div>
    </section>

    {{-- Help Others --}}
    <section class="help-others bg-gray">
        <div class="container py-80px">
            <h2 class="text-center mb-5">Help Others</h2>
            <div class="row">
                <div class="col-12 col-lg-4 col mb-3">
                    <div class="card">
                        <a href="#">
                            <h3>How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <p class="mb-5">
                                I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                which, the ...
                            </p>
                            <div class="row">
                                <div class="col me-1 me-lg-2">
                                    <a href="#">
                                        <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                    </a>
                                </div>
                                <div class="col-5 col-lg-7">
                                    <div class="avatar-sm-wrapper d-inline-block">
                                        <a href="#" class="me-1">
                                            <img src="{{ url('assets/images/avatar.png') }}" alt=""
                                                class="avatar rounded-circle">
                                        </a>
                                    </div>
                                    <span class="fs-12px">
                                        <a href="#" class="me-1 fw-bold">fajrix</a>
                                        <span class="color-gray">7 hours ago</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col mb-3">
                    <div class="card">
                        <a href="#">
                            <h3>How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <p class="mb-5">
                                I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                which, the ...
                            </p>
                            <div class="row">
                                <div class="col me-1 me lg-2">
                                    <a href="#">
                                        <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                    </a>
                                </div>
                                <div class="col-5 col-lg-7">
                                    <div class="avatar-sm-wrapper d-inline-block">
                                        <a href="#" class="me-1">
                                            <img src="{{ url('assets/images/avatar.png') }}" alt=""
                                                class="avatar rounded-circle">
                                        </a>
                                    </div>
                                    <span class="fs-12px">
                                        <a href="#" class="me-1 fw-bold">fajrix</a>
                                        <span class="color-gray">7 hours ago</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col mb-3">
                    <div class="card">
                        <a href="#">
                            <h3>How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <p class="mb-5">
                                I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                which, the ...
                            </p>
                            <div class="row">
                                <div class="col me-1 me lg-2">
                                    <a href="#">
                                        <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                    </a>
                                </div>
                                <div class="col-5 col-lg-7">
                                    <div class="avatar-sm-wrapper d-inline-block">
                                        <a href="#" class="me-1">
                                            <img src="{{ url('assets/images/avatar.png') }}" alt=""
                                                class="avatar rounded-circle">
                                        </a>
                                    </div>
                                    <span class="fs-12px">
                                        <a href="#" class="me-1 fw-bold">fajrix</a>
                                        <span class="color-gray">7 hours ago</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
        <h2>Ready to contribute?</h2>
        <p class="mb-4">Want to make a big impact?</p>
        <div class="text-center">
            <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
            <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussions</a>
        </div>
    </section>
@endsection
