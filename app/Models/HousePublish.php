<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousePublish extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'user_name',
        'title',
        'slug',
        'location',
        'house_type',
        'price',
        'time',
        'relationship',
        'house_image',
        'description',
        'contact',
    ];

    public function rental(){
        return $this->belongsTo(Rental::class);
    }
}
