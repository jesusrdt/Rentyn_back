<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 
		'subcategory_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function info()
    {
        return $this->hasOne('App\Category', 'id', 'subcategory_id');
    }
}
