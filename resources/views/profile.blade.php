@extends('templates.main')
@section('title', 'Profile')

@section('content')
    <div class="container-lg my-5">
        <div class="row justify-content-center mx-2">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 profile d-flex flex-column py-3 rounded-4">
                <div class="text-center mb-5">
                    <h5 class="mt-3">{{ Auth::user()->username }} Profile</h5>
                    <div class="row justify-content-center pt-1">
                        <p class="col-4 role my-2 mb-3 rounded-3">{{ Auth::user()->role->type }}</p>
                    </div>
                    <p class="mb-0"><b>Username : </b>{{ Auth::user()->username }}</p>
                    <p class="mb-0"><b>Email Address : </b>{{ Auth::user()->email }}</p>
                    <p class="mb-0"><b>Phone : </b>{{ Auth::user()->phone_number }}</p>
                    <p class="mb-0"><b>Address : </b>{{ Auth::user()->address }}</p>
                </div>

                <div class="mt-auto">
                    <div class="d-flex justify-content-center gap-4">
                        @if (Auth::user()->role_id == 2)
                            <a href="{{ route('editProfile') }}" class="btn btn-sm btn-outline-primary rounded-3 px-3">Edit Profile</a>
                        @endif
                        <a href="{{ route('editPassword') }}" class="btn btn-sm btn-outline-primary rounded-3 px-2">Edit Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
