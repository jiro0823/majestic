<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCart extends Model
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

    public function services()
    {
        return $this->belongsToMany(Service::class)
            ->withPivot('time_slot_id', 'date', 'start_time', 'end_time', 'location_id', 'price');
    }
}
