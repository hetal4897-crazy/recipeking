<?php


/*Route::get('/', function () {
   Artisan::call('config:cache');
   return redirect('admin');
});*/




Route::get("/","Frontcontroller@show_home")->name("show-home");






Route::get("get_recipe_share/{id}","RecipeController@get_recipe_share");
Route::get("/admin","AuthenticationController@show_logins")->name('admin-login');
Route::post("post_login","AuthenticationController@post_login")->name("post-login");
Route::get("privacy_policy","AuthenticationController@privacy_policy");

Route::group(['middleware' => ['admin_check_exist']], function () {

	Route::get("dashboard","AuthenticationController@show_dashboard")->name("dashboard");
	Route::get("logout","AuthenticationController@logout");

	Route::get("category","CategoryController@index")->name("category");
	Route::get("category_datatable","CategoryController@category_datatable")->name("category_datatable");
	Route::post("add_category","CategoryController@add_category")->name('add_category');
	Route::get("get_category_by_id/{id}","CategoryController@get_category_by_id")->name('get_category_by_id');
	Route::post("update_category","CategoryController@update_category")->name("update_category");
	Route::get("delete_category/{id}","CategoryController@delete_category")->name('delete_category');

	Route::get("recipe","RecipeController@show_recipe")->name('recipe');
	Route::get("recipe_datatable","RecipeController@recipe_datatable")->name('recipe_datatable');
	Route::get("save_recipe/{id}/{step}","RecipeController@add_recipe");
	Route::post("Saverecipestep1","RecipeController@Saverecipestep1");
	Route::post("Saverecipestep2","RecipeController@Saverecipestep2");
	Route::post("Saverecipestep3","RecipeController@Saverecipestep3");
	Route::post("Saverecipestep4","RecipeController@Saverecipestep4");
	Route::get("view_recipe/{id}","RecipeController@view_recipe_detail")->name('view_recipe');
	Route::get("approve_recipe/{id}","RecipeController@approve_recipe")->name("approve_recipe");
	Route::get("delete_recipe/{id}","RecipeController@delete_recipe")->name("delete_recipe");

	Route::get("user","UserController@index")->name('users');
	Route::get("user_datatable","UserController@user_datatable")->name('user_datatable');

	Route::get("review","reviewController@index")->name('review');
	Route::get("review_datatable","reviewController@review_datatable")->name('review_datatable');

	Route::get("delete_review/{id}","reviewController@delete_review")->name('delete_review');
	Route::get("delete_user/{id}","UserController@delete_user")->name('delete_user');

	Route::get("edit_profile","AuthenticationController@edit_profile")->name('edit_profile');
	Route::post("update_profile","AuthenticationController@update_profile")->name('update_profile');

	Route::get("change_password","AuthenticationController@change_password")->name("change_password");
    Route::get("same_pwd/{id}","AuthenticationController@check_password_same")->name("check_password_same");
    Route::post("update_password","AuthenticationController@update_password")->name("update_password");

    Route::get("notification/{id}","AuthenticationController@notification");

    Route::get("latest_recipe_datatable","RecipeController@latest_recipe_datatable")->name('latest_recipe_datatable');
    Route::get("least_review_table","reviewController@least_review_table");

    Route::get("setting","AuthenticationController@show_setting")->name('setting');
    Route::post("update_setting","AuthenticationController@update_setting")->name("update_setting");

    Route::Get("chef","ChefController@show_chef")->name("chef");
    Route::get("chef_data_table","ChefController@chef_data_table")->name("chef_data_table");
    Route::get("delete_chef","ChefController@delete_chef")->name("delete_chef");
    Route::get("save_chef/{id}","ChefController@save_chef")->name("save_chef");
    Route::post("update_chef","ChefController@update_chef")->name("update_chef");

});
