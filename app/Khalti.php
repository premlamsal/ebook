<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khalti extends Model
{
  
    protected $fillable = [
        'user_id', 'mobile' ,'amount' , 'pre_token','status','verified_token','product_identity'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [''];
}
