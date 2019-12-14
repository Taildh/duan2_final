<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
    	'name', 'price','sell_price',
    	'short_desc','description','category_id','views','status','expiry_date'
    ];
    public function product(){
    	return $this->belongsTo('App\Models\Category', 'category_id','id');
    }
}