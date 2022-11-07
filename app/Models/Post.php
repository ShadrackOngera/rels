<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'size',
        'price',
        'type',
        'deed',
        'deed_img',
        'land_img',
        'contact',
        'description',
        'user_id',
        'code',
    ];

    public $appends =['deed_img_url'];

    public function getDeedUrlAttribute() {
        return Storage::disk('public')->url($this->deed_img);
    }

    public function getlandImageUrlAttribute() {
        return Storage::disk('public')->url($this->land_img);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function publish()
    {
        return $this->hasOne(Publish::class);
    }

    public function chat(){
        return $this->hasMany(Chat::class);
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
