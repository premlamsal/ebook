<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public function Category()
    {
        return $this->belongsTo('App\Category');
    }
    public function Publication()
    {
        return $this->belongsTo('App\Publication');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function Review()
    {
        return $this->belongsTo('App\Review');
    }
    public function getImageUrl()
    {
    return asset($this->image);
	}
}
