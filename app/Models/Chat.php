<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'message',
        'user_id',
        'post_id',
    ];

    use HasFactory;
}
