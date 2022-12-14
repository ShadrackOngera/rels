<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'rental_id',
    ];
}
