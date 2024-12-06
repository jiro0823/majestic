<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
   
        protected $fillable = [
            'user_id',
            'is_paid',
            'total'
        ];
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function products()
        {
            return $this->belongsToMany(Product::class)
                ->withPivot('quantity', 'price');
        }
    }

