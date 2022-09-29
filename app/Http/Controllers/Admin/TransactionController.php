<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('admin.pages.transaction.transaction', compact('transactions'));
    }

    public function reportTransaction()
    {
        return view('admin.pages.report.transaction');
    }

    public function printPdf($fromDate, $toDate)
    {
        $fromDate = $fromDate;
        $toDate = $toDate;

        // $transactions = Transaction::whereBetween('created_at', [$fromDate, $toDate])->get();

        $transactions = Transaction::whereDate('created_at', '>=', $fromDate)
            ->whereDate('created_at', '<=', $toDate)
            ->get();

        $pdf = PDF::loadView('admin.pages.report.print-pdf', compact('transactions', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Laporan AMACOM.pdf');
    }

    public function updateProcess($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 1;
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }

    public function updateFinish(Request $request, $id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 2;
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }
}
