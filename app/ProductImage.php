<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	protected $fillable = [
        'image',
        'priority',
        'product_id'
    ];
    //
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
