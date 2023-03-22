@extends('templates.main')
@section('title', 'Cart')

@section('content')
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">My Cart</h4>
        <form class="d-flex justify-content-end mb-2" action="{{ route('checkOut') }}" method="POST">
            @csrf
            <p class="mb-0 mt-1 "><b>Total Price :</b> Rp{{ number_format($totalPrice) }}</p>
            <button type="submit"
                class="badge text-bg-success d-flex align-self-center text-decoration-none p-2 px-3 fw-normal ms-3">Check Out
                ({{ $totalQuantity }})</button>
        </form>

        <div class="row justify-content-center mb-5">
            @foreach ($carts->products as $product)
                <div class="col-12 col-sm-4 col-md-3 my-3 mt-4">
                    <div class="card background border-0 rounded-4 p-2">
                        <div class="d-flex justify-content-center m-2 p-1 bg-white rounded-4">
                            <img class="img-fluid cloth-image rounded-4"src="{{ asset('/storage/images/' . $product->image) }}"
                                alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text mb-0">Rp{{ number_format($product->price) }}</p>
                            <p class="card-text">Quantity : {{ $product->pivot->quantity }}</p>
                            <a href="{{ route('editPage', $product->id) }}" class="btn btn-primary">Edit Cart</a>
                            <form action="{{ route('deleteCart', $product->id) }}" method="POST">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-danger my-3 text-bg-danger text-start"
                                    value="delete">Remove
                                    from
                                    Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
