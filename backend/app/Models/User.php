<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    use SoftDeletes;

    protected function username():Attribute{
        return Attribute::make(
            set: function($value){
                $words = explode(' ', $value);
                $formattedWords = array_map(function($word) {
                    return ucfirst(strtolower($word));
                }, $words);
                return implode(' ', $formattedWords);
            }
        );
    }
}
