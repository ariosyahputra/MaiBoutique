@extends('templates.main')
@section('title', 'Home')

@section('content')
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">Find Your Best Clothes Here!</h4>
        <div class="row justify-content-center mb-5">
            @foreach ($products as $product)
                <div class="col-12 col-sm-4 col-md-3 my-3">
                    <div class="card background border-0 rounded-4 p-2">
                        <div class="d-flex justify-content-center m-2 p-1 bg-white rounded-4">
                            <img class="img-fluid cloth-image rounded-4"src="{{ asset('/storage/images/' . $product->image) }}" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Rp{{ number_format($product->price) }}</p>
                            <a href="{{ route('detailProduct', $product->id) }}" class="btn btn-primary">More Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mx-3 mb-4 mt-auto d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
