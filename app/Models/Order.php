<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = 'order_product';
    protected $fillable = [
    	'user_id',
    	'name', 'phone_number',
    	'order_date','sent_date', 'order_address','total_price','note','shipper_id','status'
    ];

    public function order(){
    	return $this->belongsTo('App\Models\Category', 'category_post_id','id');
    }

    public function shipper(){
    	return $this->belongsTo('App\Models\User','shipper_id','id');
    }
    
}