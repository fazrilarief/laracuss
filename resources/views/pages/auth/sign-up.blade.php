@extends('layouts.auth')

@section('content')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto m3-0">
                    <div class="d-none d-lg-block">
                        <h2>Join the Laracuss Community</h2>
                        <p>
                        <ul>
                            <li>Stuck? Ask in the Discussions</li>
                            <li>Get answers from experienced developers from around the world</li>
                            <li>Contribute by answering questions</li>
                        </ul>
                        </p>
                    </div>
                    <div class="d-block d-lg-none fs-4 text-center">
                        Create your account in a minute. It's free.
                    </div>
                </div>
                <div class="col-12 col-lg-3 h-100">
                    <a href="#" class="nav-link mb-5 text-center">
                        <img src="assets/images/logo-laracuss-blue.png" alt="Logo Laracuss" class="h-32px">
                    </a>
                    <div class="card mb-5">
                        <h3 class="text-center mb-4">Sign Up</h3>
                        <form action="{{ route('auth.sign-up.sign-up') }}" method="POST">
                            @csrf
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                aria-describedby="emailHelp" autocomplete="off" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label for="Password" class="form-label mt-3">Password</label>
                            <div class="input-group mb-3">
                                <input type="password"
                                    class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                <span
                                    class="input-group-text bg-white border-start-0 pe-auto @error('password') border-danger rounded-end @enderror"
                                    id="password">
                                    <a href="javascript:;" id="password-toggle">
                                        <img src="{{ url('assets/images/eye-slash.png') }}" alt="Password toggle"
                                            id="password-toggle-img">
                                    </a>
                                </span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="username" class="form-label mt-1">Username</label>
                            <input type="username" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                autocomplete="off">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Sign Up </button>
                            </div>
                        </form>
                    </div>
                    <p class="text-center">Already have an account?
                        <a href="{{ route('auth.login.show') }}">
                            <u>Log in
                            </u>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
