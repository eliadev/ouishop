<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;
	
	protected $table="products";
	protected $fillable = ['category_id', 'subcategory_id', 'name', 'description', 'price', 'featured', 'published'];
	
	public function category()
    {
        return $this->belongsTo('App\Category');
    }
	
	public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
	
	public function registerMediaConversions(Media $media = null)
    {
		$this->addMediaConversion('thumb-medium')
            ->width(250)
            ->height(176);
			
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }

}
