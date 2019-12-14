<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'product_category';
    protected $fillable = [
    	'name',
    	'description',
    	'status','category_type'
    ];

    public function cate(){
    	return $this->belongsTo('App\Models\Product', 'id','category_id');
    }

}
