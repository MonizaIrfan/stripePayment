@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>
    <form action="{{ route('payment.store') }}" method="post">
        @csrf
        <input type="hidden" name="productId" value="{{ $product['id'] }}">
        <input type="hidden" name="name" value="{{ $product['name'] }}">
        <input type="hidden" name="price" value="{{ $product['price'] }}">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_KEY') }}"
                data-amount="{{ $product['price'] }}"
                data-name="{{ $product['name'] }}"
                data-description="Your purchase"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
        </script>
    </form>
</div>
@endsection
