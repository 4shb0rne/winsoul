<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $primaryKey = 'TransactionID';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastID = static::max('TransactionID');
            if ($lastID) {
                $number = (int) substr($lastID, 2) + 1;
            } else {
                $number = 1;
            }
            $model->TransactionID = 'TR' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }


    protected $fillable = [
        'UserID',
        'TransactionDate',
    ];
}
