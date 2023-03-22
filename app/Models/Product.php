<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'image'
    ];

    public function users(){
        return $this->belongsToMany(user::class, 'carts')->withPivot('quantity');
    }

    public function transactions() {
        return $this->belongsToMany(Transaction::class, 'transaction_details')->withPivot('quantity');
    }
}
