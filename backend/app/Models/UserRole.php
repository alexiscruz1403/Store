<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'role_id',
    ];
    public $incrementing = false;
    public $timestamps = false;
}
