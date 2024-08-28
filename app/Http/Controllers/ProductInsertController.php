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

    // To insert into the database
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


    // can we just include this fucntionality with the product_list URI above?
    public function edit($id){
        $product = DB::select('select * from product where id=?', [$id]);
        return view('product_edit', ['product'=>$product]);
    }

    public function update(Request $request, $id){
        $product_Name = $request->input('product_name');
        $model_number = $request->input('model_number');
        $product_details = $request->input('product_details');
        $How_to_use = $request->input('How_to_use');
        $Shipping_details = $request->input('Shipping_details');
        $Prize = $request->input('Prize');
        $Weight = $request->input('Weight');
        $Quantity_per_pack = $request->input('Quantity_per_pack');

        DB::update('update product set product_Name=?, model_number=?, product_details=?, How_to_use=?, Shipping_details=?, Prize=?, Weight=?, Quantity_per_pack=? where id=?', [$product_Name, $model_number, $product_details, $How_to_use, $Shipping_details, $Prize, $Weight, $Quantity_per_pack, $id]);


        return 'record successfully updated<a href="/view-records"> click here for product list </a>';
    }
}
