@extends('templates.main')
@section('title', 'Edit Cart')

@section('content')
<div class="container-lg my-5">
    <div class="row justify-content-center mx-2">
        <div class="col col-lg-10 col-xl-9 col-xxl-8 p-4 product-detail rounded-4">
            <div class="row">
                <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start">
                    <img class="img-fluid cloth-detail rounded-4"src="{{ asset('/storage/images/' . $product->image) }}" alt="Card image cap">
                </div>

                <div class="col-12 col-sm col-md col-lg-3 ms-2 d-flex flex-column align-self-center">
                    <h4 class="mt-3 mb-0 m-sm-0 ">{{ $product->name }}</h4>
                    <p>Rp{{ number_format($product->price) }}</p>

                    <form action="{{ route('editCart', $product->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="d-flex">
                            <label class="qty">Quantity : </label>
                            <input type="text" name="quantity" value="{{ $product->pivot->quantity }}"
                                class="form-control qty-placeholder ms-3 rounded-2 d-flex flex-column @if(!$errors->any()) border-0 @endif @error('quantity') border-alert @enderror">
                        </div>
                        @error('quantity')
                            <div class="alert-number">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="d-flex mt-3">
                            <button type="submit"
                                class="badge text-bg-success d-flex align-self-center text-decoration-none p-2 px-3 fw-normal">Update Cart</button>
                            <a href="{{ route('cart') }}"
                                class="badge text-bg-primary d-flex align-self-center text-decoration-none p-2 px-4 fw-normal ms-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row text-break mt-4">
                <div class="col-12 ms-2 ms-sm-0 mb-3">
                    <h6 class="m-0">Product Description</h6>
                    <p class="mt-1"><small>{{ $product->description }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
