<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseStatus extends Model
{
    protected $table = 'purchase_status';
    protected $primaryKey = 'purchase_id';
    protected $fillable = [
        'purchase_id',
        'status_id',
    ];
    public $incrementing = false;
}
