<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table="subcategories";
	protected $fillable = ['name', 'description', 'order'];
	
	public function products()
    {
        return $this->hasMany('App\Product');
    }
}
