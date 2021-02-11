<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use DataTables;
use App\Model\Chef;
use App\Model\Recipe;
use App\Model\Category;
use Auth;
use File;
class Frontcontroller extends Controller
{

    public function show_home(){
        $get_category = Category::where("is_deleted",'0')->get();
        $get_latest_recipe = Recipe::OrderBy("id","DESC")->get();
        return view("front.home")->with("category",$get_category)->with("get_latest_recipe",$get_latest_recipe);
    }

    public function view_recipe(){
        return view("front.receip-detail");
    }


}
