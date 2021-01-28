<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'price',
        'currency',
        'description',
        'volume',
        'volumeUnit',
        'slug'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'currency' => 'eur',
        'description' => '',
        'volume' => '',
        'volumeUnit' => ''
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['image'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    /**
     * Get all of the images for the product.
     */
    public function images()
    {
        return $this->morphToMany(Image::class, 'imageables');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
