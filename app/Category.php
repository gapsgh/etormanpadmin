<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'level',
        'parent_id',
        'order_index',
        'updated_by'
    ];


    public function product(){
    	return $this->hasMany('App\Product');
    }
}
