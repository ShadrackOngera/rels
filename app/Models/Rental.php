<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'user_id',
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
        'code',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function housePublish()
    {
        return $this->hasOne(HousePublish::class);
    }

    public function houseChat(){
        return $this->hasMany(HouseChat::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
