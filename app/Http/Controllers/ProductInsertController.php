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

        return 'Record inserted successfully <a href="/view-records"> click here for product list </a>';
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

    public function delete($id){
        DB::delete('delete from product where id=?', [$id]);
        return 'record successfully Deleted:<a href="/view-records"> click here for product list </a>';
    }


    // The below statement can be used to delete all the data from the database, and also resetting the ID value/ Primary key to 0 unlike the "delete" statement.
    public function delete_all(){
        DB::statement('truncate table product');
        return 'All the records have been deleted';
    }


    // Below is to create a second form with the JSON object insertion.

    public function insert_form_2(){
        return view('InProduct-2');
    }

    public function insert_2(Request $request){
        $product_Name = $request->input('product_name');
        $model_number = $request->input('model_number');
        $product_details = $request->input('product_details');
        $How_to_use = $request->input('How_to_use');
        $Shipping_details = $request->input('Shipping_details');
        $Prize1 = $request->input('Price_1');
        $Weight1 = $request->input('Weight_1');
        $Quantity_per_pack = $request->input('Quantity_per_pack');

        dump($request->all());
        // $weight_1 = $request->input('Quantity_per_pack_2');
        // $Prize_1 = $request->input('packets-p-1');

        $all_request = $request->all();



       $data_0 = [];
       $substring = 'Weight_';
       $number_of_fields = 1;

        foreach($all_request as $key => $value){
            if(strpos($key, $substring) !== false){

               $PRIZE = 'Price_'.$number_of_fields;
               $data_0[$PRIZE]=$request->input($PRIZE);

               $WEIGHT = 'Weight_'.$number_of_fields;
               $data_0[$WEIGHT]=$request->input($WEIGHT);

               $number_of_fields++;

            }

            else {
                    echo '';
            }
            // echo "Key: $key; Value: $value".'</br>';

        }

        $pack_JSON = json_encode($data_0);

        echo '</br>'.$pack_JSON;

    }



}
