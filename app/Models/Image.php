<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'title',
        'alt'
    ];

    /**
     * Get all of the products that are assigned this image.
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'imageables');
    }
}
