<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Session;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $product = [
            'id' => $request->productId,
            'name' => 'Product ' . $request->productId,
            'price' => $request->productId * 1000,
        ];

        return view('payment.index', compact('product'));
    }

    public function store(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $request->price,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Payment for ' . $request->name,
            ]);

            return back()->with('success_message', 'Payment successful!');
        } catch (\Exception $e) {
            return back()->with('error_message', 'Error: ' . $e->getMessage());
        }
    }
}
