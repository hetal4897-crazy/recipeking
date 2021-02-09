<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Model\Category;
use App\Model\Recipe;
use App\Model\Review;
use App\Model\RecipeStep;
use App\Model\NutritionInfo;
use App\Model\Ingredient_info;
use App\Model\Followers;

use Session;

use DataTables;

use Auth;

class UserController extends Controller
{

   public function index(){
      return view("admin.User.default");
   }

   public function user_datatable(){
        $user = User::where("user_type",'2')->get();

        return DataTables::of($user)
            ->editColumn('id', function ($user) {
                return $user->id;
            })
            ->editColumn('name', function ($user) {
                return $user->name ;
            })
            ->editColumn('email', function ($user) {
                return $user->email ;
            })
            ->editColumn('action', function ($user) {
                   $delete_user=url('delete_user',array('id'=>$user->id));
                   return  '<a onclick="delete_record(' . "'" . $delete_user. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';
            })
            ->make(true);
   }

   public function delete($id){
          $data=User::find($id);
       if($data){
           $review=Review::where("user_id",$id)->delete();
           $Followers=Followers::where("user_id",$id)->delete();
           $getrecipe=Recipe::where("user_id",$id)->get();
           foreach($getrecipe as $k){
               $info=Ingredient_info::where("user_id",$k->id)->delete();
               $nuri=NutritionInfo::where("user_id",$k->id)->delete();
               $image_path = public_path() ."/upload/category/".$k->image;
                if(file_exists($image_path)) {
                     unlink($image_path);
                }
               $d1=RecipeStep::where("user_id",$k->id)->get();
               foreach($d1 as $d){
                    $image_path = public_path() ."/upload/video/".$d->video;
                    if(file_exists($image_path)) {
                         unlink($image_path);
                    }
                    $image_path = public_path() ."/upload/thumb/".$d->thumbnail;
                    if(file_exists($image_path)) {
                         unlink($image_path);
                    }
                    $d->delete();
               }
               $k->delete();
           }
           $data->delete();
       }
       Session::flash("message",__('messages.user_delete'));
       return redirect()->back();
   }


}
