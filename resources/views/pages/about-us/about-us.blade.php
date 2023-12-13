@extends('layouts.app')

@section('content')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto m3-0">
                    <div class="d-none d-lg-block">
                        <h2>About Us</h2>
                        <div class="col-12 col-lg- mb-5 mt-4 mb-lg-0">
                            <img src="{{ url('assets/images/logo-laracuss-blue.png') }}" alt="Laracuss Logo"
                                class="h-32px mb-4">
                        </div>
                        <div class="col-lg-12">
                            <p>Welcome to Laravel Developer Forum, a place where Laravel enthusiasts and developers come
                                together to
                                discuss and share their knowledge about Laravel framework.</p>

                            <p>Our community is dedicated to fostering a supportive and collaborative environment for
                                Laravel
                                developers of all levels. Whether you are a beginner or an experienced developer, you'll
                                find
                                valuable insights, resources, and engage in meaningful discussions.</p>

                            <p>Join us in exploring the latest Laravel trends, solving coding challenges, and connecting
                                with a
                                vibrant community passionate about Laravel development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
