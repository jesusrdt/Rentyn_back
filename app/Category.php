<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
		'description', 
		'imagen', 
		'status',
    ];

    public function subCategories()
    {
        return $this->hasMany('App\SubCategory');
    }


    public function subCategory()
    {
        return $this->belongsTo('App\SubCategory');
    }
}
