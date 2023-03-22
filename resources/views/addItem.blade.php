@extends('templates.Main')
@section('title', 'Edit Profile')
@section('content')
    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-4 rounded-3 d-flex flex-column form-sign-up mb-5">
                <form enctype="multipart/form-data" action="{{ route('add') }}" method="POST">
                    @csrf
                    <h4 class="mt-3 mb-4 fw-semibold text-center">Add Item</h4>
                    <div class="mb-3">
                        <label class="form-label">Choose Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="floatingInput" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-3 @error('name') is-invalid @enderror" id="floatingInput"
                            placeholder="Clothes Name" value="{{ old('name') }}">
                        <label for="floatingInput">Clothes Name</label>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="description"
                            class="form-control rounded-3 @error('description') is-invalid @enderror" id="floatingInput"
                            placeholder="Clothes Desc" value="{{ old('description') }}">
                        <label for="floatingInput">Clothes Desc</label>


                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="price"
                            class="form-control rounded-3 @error('price') is-invalid @enderror" id="floatingInput"
                            placeholder="Clothes Price" value="{{ old('price') }}">
                        <label for="floatingInput">Clothes Price</label>

                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="stock"
                            class="form-control rounded-3 @error('stock') is-invalid @enderror" id="floatingInput"
                            placeholder="Clothes Stock" value="{{ old('stock') }}">
                        <label for="floatingInput">Clothes Stock</label>

                        @error('stock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-100 d-flex justify-content-center mt-5">
                        <button class="w-100 btn btn-success text-bg-success mt-1 rounded-3 ms-2"
                            type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
