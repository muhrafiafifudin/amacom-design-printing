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

        if ($file = $request->file('file')) {
            $destinationPath = 'admin/file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $transaction->file = $profileImage;
        }

        $transaction->phone_number = $request->phone_number;
        $transaction->products_id = $request->products_id;
        $transaction->products_qty = $request->products_qty;
        $transaction->total = $request->products_qty * $request->price;
        $transaction->order_number = rand(0000000000, 9999999999);
        $transaction->note = $request->note;
        $transaction->save();

        return redirect('detail-order/' . $transaction->order_number)->with('success', 'Order Placed Successfully');
    }

    public function detailOrder($order_number)
    {
        $transactions = Transaction::where('order_number', $order_number)->first();

        return view('users.pages.invoice', compact('transactions'));
    }
}
