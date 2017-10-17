<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
    	//tao bien hung du lieu do ve tu slide
    	$slide = Slide::all();
    	
    	$new_product = Product::where('new',1)->paginate(4);
        //dd($new_product);

        $product_promotion = Product::where('promotion_price','<>',0)->paginate(8);
        //dung mang truyen bien qua trang chu
    	//return view('page.homepage',['slide'=>$slide]);
    	return view('page.homepage',compact('slide','new_product','product_promotion'));
    }

    public function getTypeProduct($type){
        $product_by_type = Product::where('id_type',$type)->get();
    	$other_product = Product::where('id_type','<>',$type)->paginate(3);
        $type = ProductType::all();
        //$type_pro = ProductType::where('id',$type)->first();
        
        return view('page.type_product',compact('product_by_type','other_product','type'));
    }

    public function getDetail(){
    	return view('page.detail_product');
    }

    public function getContact(){
    	return view('page.contact');
    }

    public function getAbout(){
    	return view('page.about');
    }
}
