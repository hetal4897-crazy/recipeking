<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Sentinel;
use Validator;
use App\User;
use App\Model\Token;
use App\Model\Category;
use App\Model\Recipe;
use App\Model\Review;
use App\Model\Followers;
use App\Model\Favorite;
use App\Model\Ingredient_info;
use App\Model\RecipeStep;
use App\Model\NutritionInfo;
use DateTimeZone;
use DateTime;
use Image;
use Mail;
use DB;
class ApiController extends Controller {
   
   public function postregister(Request $request){
           $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'name' => 'required',
                      'email' => 'required',
                      'password' => 'required',
                      'device_token'=>'required',
                      'device_type'=>'required'
                    ];                    
            $messages = array(
                      'name.required' => "name is required",
                      'email.required' => "email is required",
                      'password.required' => "password is required",
                      'device_token.required'=>'device token is required',
                      'device_type.required'=>'device type is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                 $getemail=User::where("email",$request->get("email"))->first();
                 if($getemail){
                    $response= array("status" =>0, "msg" => "Email Id Already Exist","register"=>array());
                 }
                 else{
                     $picture="";
                     if ($request->hasFile('image')) 
                      {
                         $file = $request->file('image');
                         $filename = $file->getClientOriginalName();
                         $extension = $file->getClientOriginalExtension() ?: 'png';
                         $folderName = '/upload/profile';
                         $picture = 'profile_'.mt_rand(100000,999999). '.' . $extension;
                         $destinationPath = public_path() . $folderName;
                         $request->file('image')->move($destinationPath, $picture);
                      }
                       if($request->get("image")){
                            $data = $request->get("image");
                           /* list($type, $data) = explode(';', $data);
                            list(, $data)      = explode(',', $data);*/
                            $folderName = '/upload/profile/';
                            $destinationPath = public_path() . $folderName;
                            $picture= 'profile_'.mt_rand(100000,999999). '.' . 'png';
                            $file = $destinationPath .$picture;
                            $data = base64_decode($data);
                            file_put_contents($file, $data);
                        }
                        $data=new User();
                        $data->name=$request->get("name");
                        $data->email=$request->get("email");
                        $data->password=$request->get("password");
                        $data->user_type='2';
                        $data->login_type='1';
                        $data->profile_pic=$picture;
                        $data->save();
                        $tokenstore=new Token();
                        $tokenstore->token=$request->get("device_token");
                        $tokenstore->type=$request->get("device_type");
                        $tokenstore->save();
                        $user=User::find($data->id);
                        $user->profile_pic=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
                        $response = array("status" =>1, "msg" => "User Register Successfully","data"=>$user);
                 }
                   
           }
           return Response::json($response);
   }

   public function postlogin(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
             $rules = [
                      'login_type' => 'required',
                      'device_token' => 'required',
                      'device_type'=>'required',
                      'email' => 'required'      
                    ];
                    if($request->input('login_type')=='1'){
                        $rules['password'] = 'required';
                    }
                    if($request->input('login_type')=='2'||$request->input('login_type')=='3'){
                        $rules['soical_id'] = 'required';
                        $rules['name']='required';
                    }
                   
            $messages = array(
                      'login_type.required' => "login_type is required",
                      'device_token.required' => "device_token is required",
                      'device_type.required' => "device_type is required",
                      'email.required' => "email is required",
                      'password.required'=>"password is required",
                      "soical_id.required"=>"soical_id is required",
                      "name.required"=>"name is required"
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                 if($request->input('login_type')=='1'){
                      $user=User::where("email",$request->get("email"))->where("password",$request->get("password"))->first();
                      if($user){
                              $gettoken=Token::where("token",$request->get("device_token"))->first();
                              if(!$gettoken){
                                     $store=new Token();
                                     $store->token=$request->get("device_token");
                                     $store->type=$request->get("device_type");
                                     $store->user_id=$user->id;
                                     $store->save();
                              }
                              else{
                                     $gettoken->user_id=$user->id;
                                     $gettoken->save();
                              }
                               $user->profile_pic=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
                              $response = array("status" =>1, "msg" => "Login Successfully","data"=>$user);                               
                      }else{
                              $response = array("status" =>0, "msg" => "Login Credentials Are Wrong");
                      }
                 }
                  if($request->input('login_type')=='2' || $request->input('login_type')=='3'){
                              $checkuser=User::where("email",$request->get("email"))->first();
                              if($checkuser){//login
                                $imgdata=$checkuser->profile_pic;
                                $gettoken=Token::where("token",$request->get("device_token"))->first();
                                        if(!$gettoken){
                                               $store=new Token();
                                               $store->token=$request->get("device_token");
                                               $store->type=$request->get("device_type");
                                               $store->user_id=$checkuser->id;
                                               $store->save();
                                        }
                                         else{
                                               $gettoken->user_id=$checkuser->id;
                                               $gettoken->save();
                                        }
                          
                          
                                  
                                     if($request->get("profile_pic")!=""){
                                         $png_url = "profile_".mt_rand(100000, 999999).".png";
                                         $path = public_path().'/upload/profile/' . $png_url;
                                         $content=$this->file_get_contents_curl($request->get("profile_pic"));
                                         //print_r($content);exit;
                                            $savefile = fopen($path, 'w');
                                            fwrite($savefile, $content);
                                            fclose($savefile);
                                            $img=public_path().'/upload/profile/' . $png_url;
                                          $checkuser->profile_pic=$png_url;
                                     }
                                    
                                    
                                    $checkuser->login_type=$request->input('login_type');
                                    $checkuser->soical_id=$request->get("soical_id");
                                    $checkuser->save();
                                    $checkuser->profile_pic=isset($checkuser->profile_pic)?asset("public/upload/profile").'/'.$checkuser->profile_pic:"";
                           $response = array("status" =>1, "msg" => "Login Successfully","data"=>$checkuser);
                    }
                    else{//register
                       
                            $png_url="";
                            if($request->get("profile_pic")!=""){
                                 $png_url = "profile_".mt_rand(100000, 999999).".png";
                                 $path = public_path().'/upload/profile/' . $png_url;
                                 $content=$this->file_get_contents_curl($request->get("profile_pic"));
                                            $savefile = fopen($path, 'w');
                                            fwrite($savefile, $content);
                                            fclose($savefile);
                                            $img=public_path().'/upload/profile/' . $png_url;
                            }
                            $str=explode(" ", $request->get("name"));
                            $store=new User();
                            $store->name=$str[0];
                            $store->email=$request->get("email");
                            $store->login_type=$request->get("login_type");
                            $store->profile_pic=$png_url;
                            $store->soical_id=$request->get("soical_id");
                            $store->save();
                            $gettoken=Token::where("token",$request->get("device_token"))->update(["user_id"=>$store->id]);
                             $users=User::find($store->id);
                              $user->profile_pic=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
                             $response = array("status" =>1, "msg" => "Login Successfully","data"=>$users);
                      
                        
                    }
                      } 
           }
           return Response::json($response);
   }
    public function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }

   public function getcategory(){
        $category=Category::where("is_deleted",'0')->select("id","name","image")->orderby('id',"DESC")->get();
        if($category){
            foreach ($category as $k) {
                $k->totalrecipe=count(Recipe::where("category_id",$k->id)->get());
                $k->image=asset('/public/upload/category/').'/'.$k->image;
            }
            $response = array("status" =>1, "msg" => "Category List","category"=>$category);
        }else{
            $response = array("status" =>0, "msg" => "Category List Not Found","category"=>array());
        }
        
        return Response::json($response);
   }

   public function recipesearchbyname(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'search' => 'required'              
                    ];                    
            $messages = array(
                      'search.required' => "search is required"
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                   $store=Recipe::where('name', 'LIKE', '%' . $request->get("search") . '%')->orderby("id","DESC")->paginate(10);
                   if(count($store)>0){
                       foreach ($store as $k) {
                            $k->totalfollowers=count(Followers::where("user_id",$k->user_id)->get());
                             $finduser=User::find($k->user_id);
                             if($finduser){
                                 $k->username=$finduser->name;
                                 $k->profile_pic=asset('public/upload/profile').'/'.$finduser->profile_pic;
                             }else{
                                 $k->username="";
                                 $k->profile_pic="";
                             }
                             
                             $k->totalrecipe=count(Recipe::where("user_id",$k->user_id)->get());
                            $k->image=asset('/public/upload/recipe/').'/'.$k->image;
                       }
                        $response = array("status" =>1, "msg" => "Recipe List","recipelist"=>$store);
                   }else{
                       $response = array("status" =>0, "msg" => "Recipe List Not Found","recipelist"=>array());
                   }
                   
           }
           return Response::json($response);
   }

   public function editprofile(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'name' => 'required',
                      'email' => 'required',
                      'password' => 'required',
                      'user_id'=>'required'        
                    ];                    
            $messages = array(
                      'name.required' => "name is required",
                      'email.required' => "email is required",
                      'password.required' => "password is required",
                      'user_id.required'=>'user_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                 $getemail=User::where("email",$request->get("email"))->where("id",'!=',$request->get("user_id"))->first();
                 if($getemail){
                    $response= array("status" =>0, "msg" => "Email Id Already Exist","register"=>array());
                 }
                 else{
                        $data=User::find($request->get("user_id"));
                        $data->name=$request->get("name");
                        $data->email=$request->get("email");
                        $data->password=$request->get("password");
                        if ($request->hasFile('file')) 
                          {
                             $file = $request->file('file');
                             $filename = $file->getClientOriginalName();
                             $extension = $file->getClientOriginalExtension() ?: 'png';
                             $folderName = '/upload/profile';
                             $picture = 'profile_'.mt_rand(100000,999999). '.' . $extension;
                             $destinationPath = public_path() . $folderName;
                             $request->file('file')->move($destinationPath, $picture);
                             $img_url = $picture;
                             $data->profile_pic=$img_url;
                         }
                          if($request->get("file")){
                            $data1 = $request->get("file");
                           /* list($type, $data1) = explode(';', $data1);
                            list(, $data1)      = explode(',', $data1);*/
                            $folderName = '/upload/profile/';
                            $destinationPath = public_path() . $folderName;
                            $picture= 'profile_'.mt_rand(100000,999999). '.' . 'png';
                            $file = $destinationPath .$picture;
                            $data1 = base64_decode($data1);
                            file_put_contents($file, $data1);
                            $data->profile_pic=$picture;
                            $img_url=$picture;
                        }
                        $data->save();
                        $data->profile_pic=asset('public/upload/profile').'/'.$img_url;
                        $response = array("status" =>1, "msg" => "User Register Successfully","register"=>$data);
                 }
                   
           }
           return Response::json($response);
   }

public function addfollows(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'user_id' => 'required',
                      'follower_id' => 'required'    
                    ];                    
            $messages = array(
                      'user_id.required' => "user_id is required",
                      'follower_id.required' => "follower_id is required"
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                  $getfollow=Followers::where("user_id",$request->get("user_id"))->where("follower_id",$request->get("follower_id"))->first();
                  if($getfollow){
                      $getfollow->delete();
                      $response = array("status" =>1, "msg" => "Follow remove Successfully","reviewls"=>$getfollow);
                  }else{
                       $add=new Followers();
                       $add->user_id=$request->get("user_id");
                       $add->follower_id=$request->get("follower_id");
                       $add->save();
                       $response = array("status" =>1, "msg" => "Follow Add Successfully","reviewls"=>$add);
                  }
                     
                        
                
                   
           }
           return Response::json($response);
   }
   
   public function addreview(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'recipe_id' => 'required',
                      'user_id' => 'required',
                      'review' => 'required',
                      'ratting'=>'required'        
                    ];                    
            $messages = array(
                      'recipe_id.required' => "recipe_id is required",
                      'user_id.required' => "user_id is required",
                      'review.required' => "review is required",
                      'ratting.required'=>'ratting is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                       $add=new Review();
                       $add->recipe_id=$request->get("recipe_id");
                       $add->user_id=$request->get("user_id");
                       $add->review=$request->get("review");
                       $add->ratting=$request->get("ratting");
                       $add->save();
                        $response = array("status" =>1, "msg" => "Review Add Successfully","reviewls"=>$add);
                
                   
           }
           return Response::json($response);
   }

   public function viewrecipe($id,$user_id){
      $recipedata=$data=Recipe::with('Ingredientinfodata','NutritionInfodata','RecipeStepdata','Reviewdata','userdata')->find($id);
      
    
      if($recipedata){
          $recipedata->category_name="";
      if($recipedata->category_id){
            $getcategory=Category::find($recipedata->category_id);
            $recipedata->category_name=isset($getcategory)?$getcategory->name:"";
      }
        $recipedata->image=asset('/public/upload/recipe').'/'.$recipedata->image;
        foreach ($recipedata->RecipeStepdata as $k) {
            $k->video=asset('/public/upload/video').'/'.$k->video;
            $k->thumbnail=asset('/public/upload/thumb').'/'.$k->thumbnail;
        }
        if(isset($recipedata->userdata)&& isset($recipedata->userdata->profile_pic)){
            $recipedata->userdata->profile_pic=asset('/public/upload/profile').'/'.$recipedata->userdata->profile_pic;
        }
        $getlikes=Favorite::where("recipe_id",$id)->where("user_id",$user_id)->first();
        $recipedata->is_Following=count(Followers::where("follower_id",$user_id)->get());
        $recipedata->ratting=Review::where("recipe_id",$id)->avg("ratting");
        if($getlikes){
            $recipedata->is_likes=1;
        }else{
            $recipedata->is_likes=0;
        }
        
        foreach ($recipedata->Reviewdata as $k) {
             $data=User::find($k->user_id);
             if($data){
                $k->user_name=$data->name;
                $k->profile_pic=asset('/public/upload/profile').'/'.$k->profile_pic;
             }
             else{
                  $k->user_name="";
                  $k->profile_pic="";
             }
        }
        $response = array("status" =>1, "msg" => "Recipe Detail","recipedetail"=>$recipedata);
        return Response::json($response);
      }
      else{
        $response = array("status" =>0, "msg" => "Recipe Not Found");
        return Response::json($response);
      }
      
   }

   public function recipecount(Request $request){
      $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'recipe_id'=>'required',
                      'user_id'=>'required'
                    ];                    
            $messages = array(
                      'recipe_id.required'=>'recipe_id is required',
                      'user_id.required'=>'user_id is required',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                       $term="likes";
                       $add=Recipe::find($request->get("recipe_id"));
                       if($add){
                               $getlikes=Favorite::where("recipe_id",$request->get("recipe_id"))->where("user_id",$request->get("user_id"))->first();
                               if($getlikes){
                                   if($add->$term-1>0){
                                       $add->$term=$add->$term-1;
                                   }
                                  
                                   $getlikes=Favorite::where("recipe_id",$request->get("recipe_id"))->where("user_id",$request->get("user_id"))->delete();
                                   $msg="Likes Remove Successfully";
                                   $likes=0;
                               }else{
                                   $add->$term=$add->$term+1;
                                   $getlikes=new Favorite();
                                   $getlikes->recipe_id=$request->get("recipe_id");
                                   $getlikes->user_id=$request->get("user_id");
                                   $getlikes->save();
                                    $msg="Likes Add Successfully";
                                    $likes=1;
                               }
                               
                               $add->save();
                               $getdata=Recipe::find($request->get("recipe_id"));
                              /* $array=array("total_count"=>$getdata->$term,"likes"=>$likes);*/
                                $response = array("status" =>1, "msg" => $msg,"total_count"=>$getdata->$term,"likes"=>$likes);
                       }
                      else{
                           $response = array("status" =>0, "msg" => "Recipe not Found","data"=>array());
                      } 
                
                   
           }
           return Response::json($response);
   }
   
   public function listofrecipe(){
       $receip=Recipe::where("is_approve",'1')->orderby("id","DESC")->paginate(10);
       if(count($receip)>0){
           foreach($receip as $re){
               $re->image=asset("public/upload/recipe/").'/'.$re->image;
               $user=User::find($re->user_id);
               $re->user_name=isset($user->name)?$user->name:"";
               $total_recipe=Recipe::where("user_id",$re->user_id)->get();
               $re->total_recipe=count($total_recipe);
               $re->total_followers=count(Followers::where("user_id",$re->user_id)->get());
               $re->user_profile=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
           }
            $response = array("status" =>1, "msg" => "Receip List Successfully","recipelist"=>$receip);
       }else{
            $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>array());
       }
       return Response::json($response);
   }
   
   public function getrecipebycategory($category){
       if($category==0){
           $recipe=Recipe::paginate(10);
       }else{
           $recipe=Recipe::where('category_id',$category)->paginate(10);
       }
       if(count($recipe)>0){
           foreach($recipe as $re){
               $re->image=asset("public/upload/recipe/").'/'.$re->image;
               $user=User::find($re->user_id);
               $re->user_name=isset($user->name)?$user->name:"";
               $total_recipe=Recipe::where("user_id",$re->user_id)->get();
               $re->total_recipe=count($total_recipe);
               $re->total_followers=count(Followers::where("user_id",$re->user_id)->get());
               $re->user_profile=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
           }
            $response = array("status" =>1, "msg" => "Receip List Successfully","recipelist"=>$recipe);
       }else{
            $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>array());
       }
       return Response::json($response);
   }
   
   public function addbasicrecipe(Request $request){
       $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'name' => 'required',
                      'category_id'=>'required',
                      'user_id'=>'required',
                      'total_time'=>'required',
                      'prep_time'=>'required',
                      'cook_time'=>'required',
                      'description'=>'required',
                      'serving'=>'required'
                    ];    
                    if($request->input('id')==0){
                           $rules['image'] = 'required';
                    }
            $messages = array(
                      'name.required' => "name is required",
                      'category_id.required'=>'category_id is required',
                      'image.required'=>'image is required',
                      'user_id.required'=>'user_id is required',
                      'total_time.required' => "total_time is required",
                      'prep_time.required'=>'prep_time is required',
                      'cook_time.required'=>'cook_time is required',
                      'description.required'=>'description is required',
                      'serving.required' => "serving is required"
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                   DB::beginTransaction();
                    try {
                          if($request->get("id")==""||$request->get("id")==0){
                              $store=new Recipe();
                          }else{
                               $store=Recipe::find($request->get("id"));
                          }
                          $store->name=$request->get("name");
                          $store->category_id=$request->get("category_id");
                          $store->user_id=$request->get("user_id");
                          $store->total_time=$request->get("total_time");
                          $store->prep_time=$request->get("prep_time");
                          $store->cook_time=$request->get("cook_time");
                          $store->serving=$request->get("serving");
                          $store->description=$request->get("description");
                          $store->is_approve='0';
                          $image_path="";
                          if ($request->hasFile('image')) 
                          {
                            $image_path = public_path() ."/upload/recipe/".$store->image;
                             $file = $request->file('image');
                             $filename = $file->getClientOriginalName();
                             $extension = $file->getClientOriginalExtension() ?: 'png';
                             $folderName = '/upload/recipe';
                             $picture = 'recipe_'.mt_rand(100000,999999). '.' . $extension;
                             $destinationPath = public_path() . $folderName;
                             $request->file('image')->move($destinationPath, $picture);
                             $store->image=$picture;
                                 if(file_exists($image_path)) {
                                     try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                                }
                             }
                              if($request->get("image")){
                                    $image_path = public_path() ."/upload/recipe/".$store->image;
                                    //if(strstr($request->get("image"),"http")==""){
                                        $data = $request->get("image");
                                        /*list($type, $data) = explode(';', $data);
                                        list(, $data)      = explode(',', $data);*/
                                        $folderName = '/upload/recipe/';
                                        $destinationPath = public_path() . $folderName;
                                        $file_name= 'recipe_'.mt_rand(100000,999999). '.' . 'png';
                                        $file = $destinationPath .$file_name;
                                        $data = base64_decode($data);
                                        file_put_contents($file, $data);              
                                        $store->image=$file_name;
                                       
                                              
                                                if(file_exists($image_path)) {
                                                    try{
                                                         unlink($image_path);
                                                    }
                                                    catch(\Exception $e)
                                                    {
                                                        
                                                    }
                                                    
                                                }
                                       
                                    }
                                               
                               // }
                          $store->save();
                           DB::commit();
                           $response = array("status" =>1,"recipe_id"=>$store->id);
                     } catch (\Exception $e) {
                               DB::rollback(); 
                         $response = array("status" =>0, "recipe_id" => 0);
                   }
                
           }
           return Response::json($response);
   }
   
   public function addingredient(Request $request){
       $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'name' => 'required',
                      'weight'=>'required',
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'name.required' => "name is required",
                      'weight.required'=>'weight is required',
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                   DB::beginTransaction();
                    try {
                          if($request->get("id")==""){
                              $store=new Ingredient_info();
                          }else{
                               $store=Ingredient_info::find($request->get("id"));
                          }
                           $store->recipe_id=$request->get("recipe_id");
                           $store->name=$request->get("name");
                           $store->weight=$request->get("weight");
                           $store->save();
                        
                           DB::commit();
                           $response = array("status" =>1,"recipe_id"=>$store->recipe_id);
                     } catch (\Exception $e) {
                                 DB::rollback(); 
                         $response = array("status" =>0, "recipe_id" =>0);
                    }
                
           }
           return Response::json($response);
  
   }
   
   public function addnutritioninfo(Request $request){
         $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'name' => 'required',
                      'value'=>'required',
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'name.required' => "name is required",
                      'value.required'=>'value is required',
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                   DB::beginTransaction();
                    try {
                          if($request->get("id")==""){
                              $store=new NutritionInfo();
                          }else{
                               $store=NutritionInfo::find($request->get("id"));
                          }
                           $store->recipe_id=$request->get("recipe_id");
                           $store->name=$request->get("name");
                           $store->value=$request->get("value");
                           $store->save();
                        
                           DB::commit();
                           $response = array("status" =>1, "recipe_id" =>$store->recipe_id);
                     } catch (\Exception $e) {
                                 DB::rollback(); 
                         $response = array("status" =>0, "recipe_id" =>0);
                    }
                
           }
           return Response::json($response);
   }
   
   public function addsteprecipe(Request $request){
         $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      'recipe_id' => 'required',
                      'description'=>'required',
                      'step_no'=>'required'
                    ];  
                     if($request->input('id')==0){
                           $rules['video'] = 'required';
                           $rules['thumbnail'] = 'required';
                    }
            $messages = array(
                      'recipe_id.required' => "recipe_id is required",
                      'description.required'=>'description is required',
                      'video.required'=>'video is required',
                      'thumbnail.required'=>'thumbnail is required',
                      'step_no.required'=>'step_no is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                   DB::beginTransaction();
                    try {
                              if($request->get("id")==""){
                                    $store=new RecipeStep();
                              }else{
                                    $store=RecipeStep::find($request->get("id"));
                              }
                             $image_path="";
                             $thumb="";
                             if ($request->hasFile('video')) 
                              {
                                 $image_path = public_path() ."/upload/video/".$store->video;
                                 $file = $request->file('video');
                                 $filename = $file->getClientOriginalName();
                                 $extension = $file->getClientOriginalExtension() ?: 'png';
                                 $folderName = '/upload/video';
                                 $picture = 'recipe_'.mt_rand(100000,999999). '.' . $extension;
                                 $destinationPath = public_path() . $folderName;
                                 $request->file('video')->move($destinationPath, $picture);
                                 $store->video=$picture;
                                 if(file_exists($image_path)) {
                                     try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                                }
                             }
                             if ($request->hasFile('thumbnail')) 
                              {
                                 $image_path = public_path() ."/upload/thumb/".$store->thumbnail;
                                 $file = $request->file('thumbnail');
                                 $filename = $file->getClientOriginalName();
                                 $extension = $file->getClientOriginalExtension() ?: 'png';
                                 $folderName = '/upload/thumb';
                                 $picture = 'recipe_'.mt_rand(100000,999999). '.' . $extension;
                                 $destinationPath = public_path() . $folderName;
                                 $request->file('thumbnail')->move($destinationPath, $picture);
                                 $store->thumbnail=$picture;
                                  if(file_exists($image_path)) {
                                     try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                                  }
                             }
                              if($request->get("thumbnail")){
                                  $image_path = public_path() ."/upload/thumb/".$store->thumbnail;
                                  $data = $request->get("thumbnail");
                                 /* list($type, $data) = explode(';', $data);
                                  list(, $data)      = explode(',', $data);*/
                                  $folderName = '/upload/thumb/';
                                  $destinationPath = public_path() . $folderName;
                                  $picture= 'recipe_'.mt_rand(100000,999999). '.' . 'png';
                                  $file = $destinationPath .$picture;
                                  $data = base64_decode($data);
                                  file_put_contents($file, $data);
                                  $store->thumbnail=$picture;
                                  if(file_exists($image_path)) {
                                     try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                                  }
                            
                               }
                              $store->recipe_id=$request->get("recipe_id");
                              $store->step_no=$request->get("step_no");
                              $store->description=$request->get("description");
                              $store->save();
                           DB::commit();
                           $response = array("status" =>1, "recipe_id" => $store->recipe_id);
                     } catch (\Exception $e) {
                                 DB::rollback(); 
                         $response = array("status" =>0, "recipe_id" =>0);
                    }
                
           }
           return Response::json($response);
   }
   
   public function listofuserapi($user_id){
       
           $recipe=Recipe::where('user_id',$user_id)->paginate(10);
      
       if(count($recipe)>0){
           foreach($recipe as $re){
               $re->image=asset("public/upload/recipe/").'/'.$re->image;
               $user=User::find($re->user_id);
               $re->user_name=isset($user->name)?$user->name:"";
               $total_recipe=Recipe::where("user_id",$re->user_id)->get();
               $re->total_recipe=count($total_recipe);
               $re->total_followers=count(Followers::where("user_id",$re->user_id)->get());
               $re->user_profile=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
           }
            $response = array("status" =>1, "msg" => "Receip List Successfully","recipelist"=>$recipe);
       }else{
            $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>array());
       }
       return Response::json($response);
   }
   
   public function deleterecipe($id){
        $getrecipe=Recipe::find($id);
            if($getrecipe){
               $review=Review::where("recipe_id",$id)->delete();
               $info=Ingredient_info::where("recipe_id",$id)->delete();
               $nuri=NutritionInfo::where("recipe_id",$id)->delete();
               $image_path = public_path() ."/upload/recipe/".$getrecipe->image;
                if(file_exists($image_path)) {
                                  try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                }
               $d1=RecipeStep::where("recipe_id",$getrecipe->id)->get();
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
                   if($d->thumbnail ){
                      $image_path = public_path() ."/upload/thumb/".$d->thumbnail ;
                        if(file_exists($image_path)) {
                            try{
                                          unlink($image_path);
                                     }catch(\Exception $e){
                                         
                                     }
                        }  
                   }
                    $d->delete();
               }
               $getrecipe->delete(); 
                $response = array("status" =>1, "msg" => "Receip delete Successfully","recipelist"=>true);
           }else{
               $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>false);
           }
           return Response::json($response);
   }
   
   public function getprofiledetail($id){
       $user=User::find($id);
       if($user){
            $recipe=Recipe::where('user_id',$id)->paginate(10);
      
       if(count($recipe)>0){
            
           foreach($recipe as $re){
               $re->image=asset("public/upload/recipe/").'/'.$re->image;
               $user=User::find($re->user_id);
               $re->user_name=isset($user->name)?$user->name:"";
               $total_recipe=Recipe::where("user_id",$re->user_id)->get();
               $re->total_recipe=count($total_recipe);
               $re->total_followers=count(Followers::where("user_id",$re->user_id)->get());
               $re->user_profile=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
           }
       }
       $user->totalfollowes=count(Followers::where("user_id",$id)->get());
       $user->totalfollowing=count(Followers::where("follower_id",$id)->get());
       $user->user_profile=isset($user->profile_pic)?asset("public/upload/profile").'/'.$user->profile_pic:"";
       $user->recipe=$recipe;
           $user->total_recipe=count(Recipe::where("user_id",$id)->get());
           $user->total_followers=count(Followers::where("user_id",$id)->get());
           $response = array("status" =>1, "msg" => "User Get Successfully","recipelist"=>$user);
       }else{
           $response = array("status" =>0, "msg" => "User Not Found","recipelist"=>$user);
       }
       return Response::json($response);
   }
   
   public function ListOfreview($recipe_id){
       $recipe=Review::with('userdata')->where('recipe_id',$recipe_id)->paginate(10);
       if(count($recipe)>0){
           foreach($recipe as $r){
               if(isset($r->userdata)&&$r->userdata->profile_pic!=""){
                   $r->userdata->profile_pic=asset('public/upload/profile').'/'.$r->userdata->profile_pic;
               }
           }
            $response = array("status" =>1, "msg" => "Review List Successfully","recipelist"=>$recipe);
       }else{
            $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>array());
       }
       return Response::json($response);
   }
   
   public function listoflikes($recipe_id){
       $recipe=Favorite::with('userdata')->where('recipe_id',$recipe_id)->paginate(10);
       if(count($recipe)>0){
           foreach($recipe as $r){
               if(isset($r->userdata)&&$r->userdata->profile_pic!=""){
                   $r->userdata->profile_pic=asset('public/upload/profile').'/'.$r->userdata->profile_pic;
               }
           }
            $response = array("status" =>1, "msg" => "Review List Successfully","recipelist"=>$recipe);
       }else{
            $response = array("status" =>0, "msg" => "Data Not Found","recipelist"=>array());
       }
       return Response::json($response);
   }
   
   public function getsteprecipe(Request $request){
         $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                         $d1=RecipeStep::where("recipe_id",$request->get("recipe_id"))->get();
                           if(count($d1)>0){
                                foreach ($d1 as $k) {
                                        $k->video=asset('/public/upload/video').'/'.$k->video;
                                        $k->thumbnail=asset('/public/upload/thumb').'/'.$k->thumbnail;
                                    }
                               $response = array("status" =>1, "msg" => "Step get sucessfully","data"=>$d1);
                           }else{
                               $response = array("status" =>0, "msg" => "Recipe Not Found","data"=>array());
                           }
           }
           return Response::json($response);
   }
   
   public function getnutritioninfo(Request $request){
          $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                          $nuri=NutritionInfo::where("recipe_id",$request->get("recipe_id"))->get();
                          if(count($nuri)>0){
                               $response = array("status" =>1, "msg" => "Nutrition info  get sucessfully","data"=>$nuri);
                           }else{
                               $response = array("status" =>0, "msg" => "Recipe Not Found","data"=>array());
                           }
                         
           }
           return Response::json($response);
   }
   
   public function getingredient(Request $request){
          $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                  
                          $nuri=Ingredient_info::where("recipe_id",$request->get("recipe_id"))->get();
                           if(count($nuri)>0){
                               $response = array("status" =>1, "msg" => "Ingredient info  get sucessfully","data"=>$nuri);
                           }else{
                               $response = array("status" =>0, "msg" => "Recipe Not Found","data"=>array());
                           }
           }
           return Response::json($response);
   }
   
   public function getbasicdetails(Request $request){
        $response = array("status" => "0", "msg" => "Validation error");
           $rules = [
                      
                      'recipe_id'=>'required'
                    ];    
                 
            $messages = array(
                      'recipe_id.required'=>'recipe_id is required'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                  $message = '';
                  $messages_l = json_decode(json_encode($validator->messages()), true);
                  foreach ($messages_l as $msg) {
                         $message .= $msg[0] . ", ";
                  }
                  $response['msg'] = $message;
            } else {
                  
                   
                         
                          $data=Recipe::where("id",$request->get("recipe_id"))->first();
                          if($data){
                              $data->image=asset("public/upload/recipe/").'/'.$data->image;
                              $datacat=Category::find($data->category_id);
                              $data->category_name=$datacat->name;
                              $response = array("status" =>1, "msg" => "Recipe get sucessfully","data"=>$data);
                          }else{
                              $response = array("status" =>0, "msg" => "Recipe Not Found","data"=>array());
                          }
                           
                    
           }
           return Response::json($response);
   }
}
?>
