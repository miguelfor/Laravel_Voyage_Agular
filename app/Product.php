<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

 /* public function categoria()
    {
        return $this->hasOne('App\Categoria');
    }*/
    public function  categoryId(){
    return $this->belongsTo(Category::class);
}
    
}
