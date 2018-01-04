<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_pivot_category';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'category_id',
        'status',
    ];
	
	//public function products()
    //{
	//	return $this->belongsToMany('App\Product')->withPivot('is_active')->withTimestamps();
    //}
	
	//public function categorys()
    //{
	//	return $this->belongsToMany('App\Category')->withPivot('is_active')->withTimestamps();
    //}
}
