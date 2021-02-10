<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Session;
use App\Model\Recipe;
use App\Model\Category;
use App\Model\Ingredient_info;
use App\Model\RecipeStep;
use App\Model\NutritionInfo;
use App\Model\Review;
use App\Model\Chef;
use DataTables;
use Auth;

class RecipeController extends Controller
{

   public function show_recipe(){

        return view("admin.recipe.default");
   }

   public function recipe_datatable(){
       $recipe = Recipe::with("category")->get();

        return DataTables::of($recipe)
            ->editColumn('id', function ($recipe) {
                return $recipe->id;
            })
            ->editColumn('category', function ($recipe) {
                return isset($recipe->category->name)?$recipe->category->name:"";
            })
            ->editColumn('name', function ($recipe) {
                return $recipe->name ;
            })
            ->editColumn('name', function ($recipe) {
                return $recipe->name ;
            })
            ->editColumn('icon', function ($recipe) {
                return $recipe->image ;
            })
            ->editColumn('create_by', function ($recipe) {
                $data=User::find($recipe->user_id);
                if($data){
                    return $data->name;
                }

                return "" ;
            })
            ->editColumn('status', function ($recipe) {
                return $recipe->likes.','.$recipe->views.','.$recipe->share;
            })
            ->editColumn('action', function ($recipe) {
                     $url=url('save_recipe/').'/'.$recipe->id.'/1';
                     $view=url('view_recipe/').'/'.$recipe->id;
                     $approve=url('approve_recipe/').'/'.$recipe->id;
                     $delete_recipe=url('delete_recipe',array('id'=>$recipe->id));
                     if($recipe->is_approve=='1'){
                          $class="green";
                     }
                     else{
                          $class="red";
                     }
                     $return = '<a href="'.$url.'"   rel="tooltip" title="" class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;">
                        <i class="fa fa-edit f-s-25" style="font-size: x-large;"></i></a><a href="'.$view.'"   rel="tooltip" title="" class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;">
                        <i class="fa fa-eye f-s-75" style="font-size: x-large;"></i></a><a href="'.$approve.'"   rel="tooltip" title="" class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;">
                        <i class="fa fa-ban f-s-75" style="color:'.$class.';font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $delete_recipe. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';
                     return $return;
            })

            ->make(true);
   }

   public function add_recipe($id,$step){
        $get_category=Category::where("is_deleted",'0')->get();
        $get_chef = Chef::where("is_deleted",'0')->get();
        $data=array();
        if($id!=0){
          $data=Recipe::with('Ingredientinfodata','NutritionInfodata','RecipeStepdata')->find($id);
        }

        return view("admin.recipe.add")->with("get_chef",$get_chef)->with("category",$get_category)->with("recipe_id",$id)->with("step",$step)->with("data",$data);
   }

   public function delete_recipe($id){
           $get_recipe=Recipe::find($id);
           if($get_recipe){
               Review::where("recipe_id",$get_recipe->id)->delete();
               Ingredient_info::where("recipe_id",$get_recipe->id)->delete();
               $nuri=NutritionInfo::where("recipe_id",$get_recipe->id)->delete();
               $image_path = public_path() ."/upload/recipe/".$get_recipe->image;
                if(file_exists($image_path)) {
                     unlink($image_path);
                }
                $d1=RecipeStep::where("recipe_id",$get_recipe->id)->get();
                foreach($d1 as $d){
                   if($d->video){
                      $image_path = public_path() ."/upload/video/".$d->video;
                        if(file_exists($image_path)) {
                            try{
                                          unlink($image_path);
                                     }catch(\Exception $e){

                                     }
                        }
                   }
                   if($d->thumbnail	){
                      $image_path = public_path() ."/upload/thumb/".$d->thumbnail	;
                        if(file_exists($image_path)) {
                            try{
                                          unlink($image_path);
                                     }catch(\Exception $e){

                                     }
                        }
                   }
                    $d->delete();
               }
               $get_recipe->delete();
           }
          Session::flash("message",__('messages.recipe_del'));
          return redirect()->back();
   }

   public function Saverecipestep1(Request $request){
      if($request->get("recipe_id")!=0){
          $store=Recipe::find($request->get("recipe_id"));
      }
      else{
          $store=new Recipe();
      }

          $store->name=$request->get("name");
          $store->category_id=$request->get("category");
          $store->user_id=Auth::id();
          $store->total_time=$request->get("total_time");
          $store->prep_time=$request->get("prep_time");
          $store->cook_time=$request->get("cook_time");
          $store->description=$request->get("description");
          $store->chef_id=$request->get("chef_id");
          $store->is_approve='1';
          $store->serving=$request->get("serving");
          if ($request->hasFile('upload_image'))
              {
                 $image_path="";
                 if($request->get("recipe_id")!=0){
                    $image_path = public_path() ."/upload/recipe/".$store->image;
                 }
                 $file = $request->file('upload_image');
                 $filename = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension() ?: 'png';
                 $folderName = '/upload/recipe';
                 $picture = 'recipe_'.mt_rand(100000,999999). '.' . $extension;
                 $destinationPath = public_path() . $folderName;
                 $request->file('upload_image')->move($destinationPath, $picture);
                 $store->image=$picture;

                 if(file_exists($image_path)) {
                     unlink($image_path);
                  }
             }

          $store->save();
          return redirect("save_recipe/".$store->id."/2");
   }

   public function Saverecipestep2(Request $request){
       if($request->get("recipe_id")==0){
          Session:flash("message",__('messages.First Add Basic Information'));
          return redirect("saverecipe/0/1");
       }else{
           Ingredient_info::where("recipe_id",$request->get("recipe_id"))->delete();
       }
       $name=$request->get("ing_name");
       $weight=$request->get("ing_weight");
       $i=0;
       foreach ($name as $k) {
          $store=new Ingredient_info();
          $store->recipe_id=$request->get("recipe_id");
          $store->name=$k;
          $store->weight=$weight[$i];
          $store->save();
          $i++;
       }

       return redirect("save_recipe/".$request->get("recipe_id")."/3");
   }

   public function Saverecipestep3(Request $request){
       if($request->get("recipe_id")==0){
          Session:flash("message",__('messages.First Add Basic Information'));
          return redirect("save_recipe/0/1");
       }
       else{
           NutritionInfo::where("recipe_id",$request->get("recipe_id"))->delete();
       }
       $name=$request->get("nutri_name");
       $value=$request->get("nutri_value");
       for($i=0;$i<count($name);$i++){
          $store=new NutritionInfo();
          $store->recipe_id=$request->get("recipe_id");
          $store->name=$name[$i];
          $store->value=$value[$i];
          $store->save();
       }
       return redirect("save_recipe/".$request->get("recipe_id")."/4");
   }

   public function latest_recipe_datatable(){
     $recipe = Recipe::whereDate("created_at",date('Y-m-d'))->get();
        return DataTables::of($recipe)
            ->editColumn('id', function ($recipe) {
                return $recipe->id;
            })
            ->editColumn('recipe_name', function ($recipe) {
                return $recipe->name ;
            })
            ->editColumn('user_name', function ($recipe) {
                $data=User::find($recipe->user_id);
                if($data){
                    return $data->name;
                }
                return "" ;
            })
            ->make(true);
   }

   public function Saverecipestep4(Request $request){
   // dd($request->all());exit;
       if($request->get("recipe_id")==0){
          Session:flash("message",__('messages.First Add Basic Information'));
          return redirect("save_recipe/0/1");
       }
      $name=$request->get("stepdetail");
      $totalstep=$request->get("totalstep");
      $video=$request->file("files");
      $videols=array();
      $thumbls=array();
      $image_real=$request->get("image_real");
      $image_thumb=$request->get("thumbreal");
      $thumbimgdata=$request->get("thumbimgdata");
      for($i=0;$i<count($name);$i++){
                if(array_key_exists($i,$video)){
                   $file = $video[$i];
                   $filename = $file->getClientOriginalName();
                   $extension = $file->getClientOriginalExtension() ?: 'mp4';
                   $folderName = '/upload/video';
                   $picture = 'video_'.mt_rand(100000,999999). '.' . 'mp4';
                   $destinationPath = public_path() . $folderName;
                   $video[$i]->move($destinationPath, $picture);
                   $videols[$i] = $picture;
                   $image_path="";
                   if($image_real[$i]!=0){
                      $image_path = public_path() ."/upload/video/".$image_real[$i];

                   }
                   if(file_exists($image_path)) {
                     unlink($image_path);
                   }

                }else{
                    $videols[$i]=$image_real[$i];
                }
                if(array_key_exists($i,$thumbimgdata)){
                    $data = $thumbimgdata[$i];
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $folderName = '/upload/thumb/';
                    $destinationPath = public_path() . $folderName;
                    $file_name=uniqid() . '.png';
                    $file = $destinationPath .$file_name;
                    $data = base64_decode($data);
                    file_put_contents($file, $data);
                    $thumbls[$i] = $file_name;
                    $image_path="";
                    if($image_thumb[$i]!=0){
                      $image_path = public_path() ."/upload/thumb/".$image_thumb[$i];

                    }
                    if(file_exists($image_path)) {
                     unlink($image_path);
                   }

                }else{
                    $thumbls[$i]=$image_thumb[$i];
                }
      }
      RecipeStep::where("recipe_id",$request->get("recipe_id"))->delete();
      for($i=0;$i<count($name);$i++){
          $store=new RecipeStep();
          $store->recipe_id=$request->get("recipe_id");
          $store->step_no=$i+1;
          $store->description=$name[$i];
          $store->video=$videols[$i];
          $store->thumbnail=$thumbls[$i];
          $store->save();
       }
      Session::flash("message",__('messages.Recipe Add Successfully'));
      return redirect('recipe');
   }



   public function view_recipe_detail($id){
      $data=Recipe::with('Ingredientinfodata','NutritionInfodata','RecipeStepdata')->find($id);
      if($data){
          return view("admin.recipe.view")->with("data",$data);
      }
      else{
           return redirect()->back();
      }
   }

   public function get_recipe_share($id){
       $data=Recipe::find($id);
       $data->share=$data->share+1;
       $data->save();
       return view('admin.recipe.share')->with("data",$data);
   }

   public function approve_recipe($id){
      $store=Recipe::find($id);
      if($store){
        if($store->is_approve=='1'){
            $store->is_approve='0';
            $ms=__('messages.Recipe unapproved');
        }else{
            $store->is_approve='1';
            $ms=__('messages.Recipe Approved');
        }
        $store->save();
        Session::flash("message",$ms);
        return redirect()->back();
      }
      else{
          return redirect()->back();
      }

   }
}
