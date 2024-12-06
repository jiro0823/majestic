<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $table = 'crews';
    
    // Assuming the table has these columns
    protected $fillable = ['name', 'position', 'image_url', 'experience', 'achievements'];

    // Cast achievements to array (JSON in the database)
    protected $casts = [
        'achievements' => 'array',
    ];
}
