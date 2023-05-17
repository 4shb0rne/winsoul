<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function deleteTransaction($id)
    {
        TransactionDetail::where("TransactionID", $id)->delete();
        TransactionHeader::where("TransactionID", $id)->delete();
        return redirect('transactions');
    }

    public function getAllTransactions()
    {
        $transactions = TransactionHeader::all();
        return view('pages/transactions/transactionlist', ['transactions' => $transactions]);
    }

    public function getTransactionDetail($id)
    {
        $transactionDetails = TransactionDetail::whereIn('TransactionID', $id)->get();
        return view('pages/transactions/transactiondetail', ['details' => $transactionDetails]);
    }
}
