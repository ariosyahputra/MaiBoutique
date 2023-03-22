@extends('templates.landingTemplate')
@section('title', 'Register')
@section('content')
    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-9 col-sm-7 col-md-5 col-lg-4 p-4 rounded-3 d-flex flex-column form-sign-up mb-5">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h4 class="mt-3 mb-4 fw-semibold text-center">Register</h4>
                    <div class="form-floating">
                        <input type="text" name="username"
                            class="form-control rounded-3 @error('username') is-invalid @enderror" id="floatingInput"
                            placeholder="Username" autofocus value="{{ old('username') }}">
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
                            placeholder="Email" autofocus value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-3 password @error('password') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="phone_number"
                            class="form-control rounded-3 @error('phone_number') is-invalid @enderror" id="floatingInput"
                            placeholder="Phone Number" autofocus value="{{ old('phone_number') }}">
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
                            placeholder="Address" autofocus value="{{ old('address') }}">
                        <label for="floatingInput">Address</label>

                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="my-3 to-login text-center">
                        <label>Already Register?</label>
                        <a href="{{ route('login') }}">Login</a>
                    </div>

                    <div class="w-100 d-flex justify-content-center">
                        <button class="w-75 btn btn-primary mt-1 rounded-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
