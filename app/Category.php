<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  
    public function SubCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}

// SubMenu Model
class SubCategory extends Model
{
  
	// public function Category()
	//     {
	//         return $this->belongsTo(Category::class);
	//     }
	public function Book()
    {
        return $this->belongsTo('App\Book');
    }
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
