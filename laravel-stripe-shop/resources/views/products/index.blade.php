@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">${{ number_format($product['price'] / 100, 2) }}</p>
                        <a href="{{ route('payment.index', ['productId' => $product['id']]) }}" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
