<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Menu Model
class Menu extends Model
{
	
    public function submenu()
    {
        return $this->hasMany(SubMenu::class);
    }
}

// SubMenu Model
class SubMenu extends Model
{
  
	public function menu()
	    {
	        return $this->belongsTo(Menu::class);
	    }
}
