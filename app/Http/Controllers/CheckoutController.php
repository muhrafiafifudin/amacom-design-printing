<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function placeorder(Request $request)
    {
        $transaction = new Transaction();
        $transaction->users_id = Auth::id();
        // $transaction->products_images = Auth::id();
        $transaction->phone_number = $request->input('phone_number');
        // $transaction->products_id = Auth::id();
        // $transaction->products_qty = Auth::id();
        // $transaction->total = Auth::id();
        $transaction->order_number = rand(0000000000, 9999999999);
        $transaction->save();
    }
}
