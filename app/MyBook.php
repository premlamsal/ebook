<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyBook extends Model
{

    protected $fillable = [
        'user_id', 'book_id', 'trans_id','trans_amount'
    ];
    
}
