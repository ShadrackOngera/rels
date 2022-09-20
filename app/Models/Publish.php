<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'price', 'location', 'size', 'user_id', 'deed', 'post_id', 'type'];
}
