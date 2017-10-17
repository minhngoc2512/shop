<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //khai bao bang
    protected $table = "type_products";

    //1 lsp cos nhieu sp
    public function product(){
    	//duong dan toi model, khoa ngoai,khoa chinh
    	return $this->hasMany('App\Product','id_type','id');
    }
}
