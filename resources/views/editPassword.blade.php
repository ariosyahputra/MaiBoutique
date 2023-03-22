@extends('templates.Main')
@section('title', 'Edit Password')
@section('content')
    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-4 rounded-3 d-flex flex-column form-sign-up mb-5">
                <form enctype="multipart/form-data" action="{{ route('savePassword') }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <h4 class="mt-3 mb-4 fw-semibold text-center">Edit Password</h4>

                    @error('failed')
                        <div class="alert alert-danger d-flex alert-dismissible fade show">
                            <i data-feather="alert-triangle"style="margin-right: 0.5em; width: 1.5em"></i>
                            {{ $message }}
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                aria-label="close"></button>
                        </div>
                    @enderror

                    <div class="form-floating">
                        <input type="password" name="oldPassword"
                            class="form-control rounded-3 password @error('oldPassword') is-invalid @enderror"
                            id="floatingPassword" placeholder="Old Password">
                        <label for="floatingPassword">Old Password</label>

                        @error('oldPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="newPassword"
                            class="form-control rounded-3 password @error('newPassword') is-invalid @enderror"
                            id="floatingPassword" placeholder="New Password">
                        <label for="floatingPassword">New Password</label>

                        @error('newPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-100 d-flex justify-content-center mt-5">
                        <a href="{{ route('profile') }}" class="w-100 btn btn-primary mt-1 rounded-3">Back</a>
                        <button class="w-100 btn btn-success text-bg-success mt-1 rounded-3 ms-2"
                            type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
