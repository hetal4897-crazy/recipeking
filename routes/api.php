<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any("register",'API\ApiController@postregister');
Route::any("login","API\ApiController@postlogin");
Route::any("getcategory","API\ApiController@getcategory");
Route::any("recipesearchbyname","API\ApiController@recipesearchbyname");
Route::any("editprofile","API\ApiController@editprofile");
route::any("addreview","API\ApiController@addreview");
Route::get("viewrecipe/{id}/{user_id}",'API\ApiController@viewrecipe');
Route::get("recipecount","API\ApiController@recipecount");
Route::get("listofrecipe","API\ApiController@listofrecipe");
Route::get("getrecipebycategory/{category}","API\ApiController@getrecipebycategory");
Route::any("addbasicrecipe","API\ApiController@addbasicrecipe");
Route::any("addsteprecipe","API\ApiController@addsteprecipe");
Route::any("listofrecipeuser/{user_id}","API\ApiController@listofuserapi");
Route::any("deleterecipe/{recipe_id}","API\ApiController@deleterecipe");
Route::any("getprofiledetail/{user_id}","API\ApiController@getprofiledetail");
Route::any("ListOfreview/{recipe_id}","API\ApiController@ListOfreview");
Route::any("listoflikes/{recipe_id}","API\ApiController@listoflikes");
Route::any("addfollows","API\ApiController@addfollows");
Route::any("addingredient","API\ApiController@addingredient");
Route::any("addnutritioninfo","API\ApiController@addnutritioninfo");

Route::any("getbasicdetails","API\ApiController@getbasicdetails");
Route::any("getingredient","API\ApiController@getingredient");
Route::any("getnutritioninfo","API\ApiController@getnutritioninfo");
Route::any("getsteprecipe","API\ApiController@getsteprecipe");
Route::any("deletenutri/{id}","API\ApiController@deletenutri");
Route::any("deleteingre/{id}","API\ApiController@deleteingre");
