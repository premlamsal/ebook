<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    protected $fillable = [
        'name','address','phone','mobile','proprietor','state'
    ];
}
