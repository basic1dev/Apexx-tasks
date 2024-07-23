<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// This is the normal route use

// Route::get('uri', action);

Route::get('/', function () {
    return view('home');
});


Route::get('/contacts', function () {
    return view('first');
});


// For the form

Route::get('/user-form', function () {
    return view('user_form');
});


Route::post('/get-userdata', function(Request $request) {
    // dd($request->all());
    $name = $request->input("name");
    $email = $request->input("email");
    $password = $request->input("password");

    // return "The values are as follows; name: ".$name." email: ".$email." password: ".$password;

    // lets redirect
    return redirect('user-form')->with('message', 'We obtained your info, Welcome to our community.');

});
