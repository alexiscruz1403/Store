<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    protected $table = 'product_purchase';
    protected $primaryKey = 'purchase_id';
    public $incrementing = false;
    public $timestamps = false;
}
