<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   public function Book()
    {
        return $this->belongsTo('App\Book');
    }
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}

