<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'location',
        'size',
        'user_name',
        'deed',
        'deed_img',
        'land_img',
        'post_id',
        'contact',
        'type'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }


}
