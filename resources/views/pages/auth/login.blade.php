@extends('layouts.auth')

@section('content')
    <section class="bg-gray vh-100">
        <div class="login container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <a href="{{ route('home') }}" class="nav-link mb-5 text-center">
                        <img class="h-32px" src="{{ url('assets/images/logo-laracuss-blue.png') }}" alt="Laracuss Logo">
                    </a>
                    <div class="card mb-5">
                        <h3 class="text-center mb-4">Login</h3>
                        <form action="{{ route('auth.login.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror @error('credentials') is-invalid @enderror"
                                    id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}"
                                    autocomplete="off" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('credentials')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror"
                                        id="password" name="password">
                                    <span
                                        class="input-group-text bg-white border-start-0 pe-auto @error('password') border-danger rounded-end @enderror">
                                        <a href="javascript:;" id="password-toggle">
                                            <img src="{{ url('assets/images/eye-slash.png') }}" alt="Password toggle"
                                                id="password-toggle-img">
                                        </a>
                                    </span>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Log in</button>
                            </div>
                        </form>
                    </div>
                    <p class="text-center">Don’t have an account? <a href="{{ route('auth.sign-up.show') }}"><u>Sign
                                up</u></a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
