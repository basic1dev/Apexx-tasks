<?php

use App\Http\Controllers\causesController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\resourcesController;
use App\Http\Controllers\ProductInsertController;
use Illuminate\Support\Facades\Route;


// home,home form routes
Route::get('/',[homeController::class,'index'])->name('home');
Route::post('/',[homeController::class,'homeForm'])->name('homeForm');

// events,events form routes
Route::get('/events',[eventsController::class,'index'])->name('events');
Route::post('/events',[eventsController::class,'eventsForm'])->name('eventsForm');

// causes,resources routes
Route::get('/causes',[causesController::class,'index'])->name('causes');
Route::get('/resources',[resourcesController::class,'index'])->name('resources');




Route::get('/InProduct', [ProductInsertController::class,'insert_form'])->name('InProduct');

Route::post('create', [ProductInsertController::class,'insert']);

Route::get('view-records', [ProductInsertController::class,'product_list']);



// -------------- To edit existing records ------------


Route::get('edit/{id}', [ProductInsertController::class,'edit']);

// The post request sent by the edit form to the database to update
Route::post('edit/{id}', [ProductInsertController::class,'update']);

// To delete a query
Route::get('delete/{id}', [ProductInsertController::class,'delete']);



// ---------- Experimental -----------------

// To additional form - expandable form.
Route::get('/InProduct-2', [ProductInsertController::class,'insert_form_2']);

Route::post('create-2', [ProductInsertController::class,'insert_2']);
