<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //voyager relationship
    public function categoryId()
    {
        return $this->belongsTo('App\Category');
    }
    //get product category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
