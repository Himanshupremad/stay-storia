<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'address',
        'comment',

    ];
}
