<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected $table = 'coupons';
    protected $fillable = [
    	'code','type',
    	'description','percent_off','minimum','star_date','end_date','status'
    ];
    
}