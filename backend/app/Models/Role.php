<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_name',
        'role_description',
    ];
    public $timestamps = false;
}
