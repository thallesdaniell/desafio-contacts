<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
