<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'ProductID';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastID = static::max('ProductID');
            if ($lastID) {
                $number = (int) substr($lastID, 2) + 1;
            } else {
                $number = 1;
            }
            $model->ProductID = 'PR' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }


    protected $fillable = [
        'productname',
        'productprice',
        'productdescription',
        'productimage'
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'ProductID');
    }
}
