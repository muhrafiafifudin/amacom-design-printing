<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function order()
    {
        $orders = Transaction::where('users_id', Auth::id())->get();

        return view('users.pages.my-account.transaction', compact('orders'));
    }

    public function orderDetail($order_number)
    {
        $transactions = Transaction::where('order_number', $order_number)->first();

        return view('users.pages.my-account.transaction-detail', compact('transactions'));
    }
}
