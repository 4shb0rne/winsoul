<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'TransactionID',
        'ProductID',
        'Quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    public function transactionHeader()
    {
        return $this->belongsTo(TransactionHeader::class, 'TransactionID');
    }
}
