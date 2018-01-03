<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{

	use SoftDeletes;

	protected $table="products";
	
	protected $fillable = [
       			'title',
       			'characteristic',
            	'description',
            	'imagen',
            	'status',
            			];
            			
    protected $dates = ['deleted_at'];

public function scopeBusqueda($query, $busq){

      if(trim($busq) != "")
      {
        
       $query->where('title',"LIKE",'%'.$busq.'%')
             ->orderBy('title','ASC')
             ->orderBy('status','ASC');

      }else{


      
    }

}


}
