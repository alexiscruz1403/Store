<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'image_id',
        'product_id',
        'product_color'
    ];
    public $incrementing = false;
    public $timestamps = false;
}
