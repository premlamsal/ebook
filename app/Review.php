<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    protected $fillable = [
        'rating', 'body','user_id','book_id','title'
    ];

}
