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
        $transactionDetails = TransactionDetail::where('TransactionID', $id)->get();
        $totalprice = 0;
        foreach($transactionDetails as $transaction){
            $totalprice += $transaction->product->productprice * $transaction->Quantity;
        }
        return view('pages/transactions/transactiondetail', ['transactions' => $transactionDetails,
        'total_price' => $totalprice]);
    }
}
