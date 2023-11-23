@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <form action="">
                        <div class="d-flex flex-column flex-md-row mb-4">
                            <div class="edit-avatar-wrapper mb-3 mb-md-0 mx-auto mx-md-0">
                                <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                                    <img src="{{ url('assets/images/fazril-ori.jpg') }}" alt="avatar" id="avatar"
                                        class="avatar ">
                                </div>
                                <label for="picture" class="btn p-0 edit-avatar-show">
                                    <img src="{{ url('assets/images/ic_edit_avatar.png') }}" alt="Edit Circle">
                                </label>
                                <input type="file" class="d-none" id="picture" name="picture" accept="image/">
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                    <div class="fs-12px color-gray">
                                        Empty this if you don't want to change your password
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
                                    <div class="fs-12px color-gray">
                                        Empty this if you don't want to change your password
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-4" type="submit">Save</button>
                            <a href="#">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $('#picture').on('change', function(event) {
            var output = $('#avatar');
            output.attr('src', URL.createObjectURL(event.target.files[0]));
            output.onload = function() {
                URL.revokeObjectURL(output.attr('src'));
            }
        })
    </script>
@endsection
