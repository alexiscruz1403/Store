<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';
    protected $fillable = [
        'purchase_date',
        'purchase_type',
        'user_id'
    ];

    public $timestamps = false;

    protected function casts():array{
        return [
            'purchase_date' => 'datetime',
        ];
    }
}
