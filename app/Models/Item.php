<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    protected $table = 'item';
    protected $fillable = [
    	'order_id',
    	'product_id','image',
    	'price', 'quantity'
    ];

    public function order(){
    	return $this->belongsTo('App\Models\Order', 'order_id','id');
    }

    public function pro(){
    	return $this->belongsTo('App\Models\Product', 'product_id','id');
    }
    
}