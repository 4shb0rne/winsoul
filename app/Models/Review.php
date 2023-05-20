<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'ReviewID';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastID = static::max('ReviewID');
            if ($lastID) {
                $number = (int) substr($lastID, 2) + 1;
            } else {
                $number = 1;
            }
            $model->ReviewID = 'RV' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }

    protected $fillable = [
        'ReviewID',
        'UserID',
        'ProductID',
        'reviewscore',
        'content',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
