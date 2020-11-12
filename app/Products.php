<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    /*public function product_types(){
        return $this->hasOne('\App\product_types', 'productTypeId');
    }*/

}
