<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/",["as"=>"home","uses"=>"HomeController@home"]);
Route::get("/application_manager",["as"=>"application_manager","uses"=>"HomeController@application_manager"]);
Route::get("/getAppsTable",["as" => "getAppsTable" , "uses" =>"applicationController@getAppsTable"]);
Route::get("/store_item_definer",["as" => "store_item_definer" , "uses" =>"HomeController@store_item_definer"]);
Route::get("/add_items_to_store",["as" => "add_items_to_store" , "uses" =>"HomeController@add_items_to_store"]);
Route::get("/delete_item_from_stroe",["as" => "delete_item_from_stroe" , "uses" =>"HomeController@delete_item_from_stroe"]);
Route::get("/define_item_groups",["as" => "define_item_groups" , "uses" =>"HomeController@define_item_groups"]);

Route::group(["before"=>"CSRF"],function(){
	Route::post("/addNewApplication",["as"=>"addNewApplication","uses"=>"applicationController@addNewApplication"]);
	Route::post("/addNewItemCard",["as"=>"addNewItemCard","uses"=>"storesController@addNewItemCard"]);
	Route::post("/addItemsToStores",["as"=>"addItemsToStores","uses"=>"storesController@addItemsToStores"]);
});

Route::post('/updateApp',["as" => "updateApp" , "uses" => "applicationController@updateApp"]);

Route::delete("/deleteApp",["as" => "deleteApp" , "uses" => "applicationController@deleteApp"]);