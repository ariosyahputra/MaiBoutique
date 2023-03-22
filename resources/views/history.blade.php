@extends('templates.main')
@section('title', 'History')

@section('content')
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">Check What You've Bought</h4>
        <div class="row justify-content-center mb-5">
            @foreach ($histories as $history)
                <div class="col-11 col-sm-7 col-md-5 col-lg-4 col-xxl-3 m-3 py-2 background rounded-3 d-flex flex-column">
                    <p class=" date rounded-3 col-4 py-1 text-center mt-2 ms-2">{{ $history->transaction_date->format('d-m-Y') }}</p>
                    <div class="border-0 rounded-4 px-2">
                        @php
                            $totalPrice = 0;
                        @endphp
                        @foreach ($history->products as $product)
                            @php
                                $totalPrice += (int) ($product->pivot->quantity * $product->price);
                            @endphp
                            <p>&#x2022 {{ $product->pivot->quantity }}pc(s) <b>{{ $product->name }}</b>
                                Rp{{ number_format($product->price) }}</p>
                        @endforeach
                    </div>
                    <p class="ms-2 mt-auto mb-2"><b>Total : </b> Rp{{ number_format($totalPrice) }} </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
