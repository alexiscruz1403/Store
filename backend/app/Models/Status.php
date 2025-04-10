<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $primaryKey = 'status_id';
    protected $fillable = [
        'status_name', 
        'status_description'
    ];
    public $timestamps = false;
}
