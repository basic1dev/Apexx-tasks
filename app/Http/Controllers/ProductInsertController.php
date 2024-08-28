<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductInsertController extends Controller
{

    public function product_list(){
        $products = DB::select('select * from product');
        return view('productList', ['products'=>$products]);
    }

    public function insert_form(){
        return view('InProduct');
    }

    public function insert(Request $request){
        $product_Name = $request->input('product_name');
        $model_number = $request->input('model_number');
        $product_details = $request->input('product_details');
        $How_to_use = $request->input('How_to_use');
        $Shipping_details = $request->input('Shipping_details');
        $Prize = $request->input('Prize');
        $Weight = $request->input('Weight');
        $Quantity_per_pack = $request->input('Quantity_per_pack');

        DB::insert("insert into product(product_Name, model_number, product_details, How_to_use, Shipping_details, Prize, Weight, Quantity_per_pack) values(?, ?, ?, ?, ?, ?, ?, ?)", [$product_Name, $model_number, $product_details, $How_to_use, $Shipping_details, $Prize, $Weight, $Quantity_per_pack]);
        return "Record inserted successfully";
    }
}
