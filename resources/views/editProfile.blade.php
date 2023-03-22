@extends('templates.Main')
@section('title', 'Edit Profile')
@section('content')
    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-4 rounded-3 d-flex flex-column form-sign-up mb-5">
                <form enctype="multipart/form-data" action="{{ route('saveProfile') }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <h4 class="mt-3 mb-4 fw-semibold text-center">Edit Profile</h4>
                    <div class="form-floating">
                        <input type="text" name="username"
                            class="form-control rounded-3 @error('username') is-invalid @enderror" id="floatingInput"
                            placeholder="Username" value="{{ Auth::user()->username }}">
                        <label for="floatingInput">Username</label>

                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control rounded-3 @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="Email" value="{{ Auth::user()->email }}">
                        <label for="floatingInput">Email address</label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="phone_number"
                            class="form-control rounded-3 @error('phone_number') is-invalid @enderror" id="floatingInput"
                            placeholder="Phone Number" value="{{ Auth::user()->phone_number }}">
                        <label for="floatingInput">Phone Number</label>

                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="address"
                            class="form-control rounded-3 @error('address') is-invalid @enderror" id="floatingInput"
                            placeholder="Address" value= "{{ Auth::user()->address }}">
                        <label for="floatingInput">Address</label>

                        @error('address')
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
