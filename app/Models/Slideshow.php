<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Slideshow extends Model
{
    protected $table = 'slideshow_parent';
    protected $fillable = [
    	'name',
    	'description', 'status'
    ];
    
}