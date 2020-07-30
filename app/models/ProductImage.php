<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable=[
    'img_title',
    'img',
    'slug',
    'product_id'
];

public function products(){
    return $this->belongsTo('App\models\Product');
}


}
