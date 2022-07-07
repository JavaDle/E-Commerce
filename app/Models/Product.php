<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'image_url',
        'video_url',
        'category_id',
        'price',
        'extra_options',
        'gallery_id',
    ];

    protected $casts = [
        'extra_options' => 'json'
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class,'id','category_id');
    }

    public function gallery(): HasOne
    {
        return $this->hasOne(Gallery::class,'gallery_id','id');
    }
}
