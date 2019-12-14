<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
    	'title',
    	'short_desc', 'description',
    	'views', 'category_post_id','date','status','author'
    ];

    public function post(){
    	return $this->belongsTo('App\Models\Category', 'category_post_id','id');
    }
    
}