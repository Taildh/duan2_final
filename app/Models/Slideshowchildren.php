<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Slideshowchildren extends Model
{
    protected $table = 'slideshow_children';
    protected $fillable = [
    	'status',
    	'parent_id'
    ];

    public function slide(){
    	return $this->belongsTo('App\Models\Slideshow', 'parent_id','id');
    }
    
}