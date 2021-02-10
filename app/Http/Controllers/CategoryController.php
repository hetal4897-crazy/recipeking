<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\Model\Category;
use App\Model\Recipe;
use App\Model\Review;
use App\Model\RecipeStep;
use App\Model\NutritionInfo;
use App\Model\Ingredient_info;
use App\Model\Followers;
use DataTables;
use Auth;
use File;
class CategoryController extends Controller
{

    public function index()
    {
        return view("admin.category.default");
    }

    public function category_datatable()
    {
        $category = Category::where("is_deleted", '0')->get();
        return DataTables::of($category)
            ->editColumn('id', function ($category) {
                return $category->id;
            })
            ->editColumn('name', function ($category) {
                return $category->name;
            })
            ->editColumn('icon', function ($category) {
                return $category->image;
            })
            ->editColumn('action', function ($category) {
                $delete_cat = url('delete_category', array('id' => $category->id));
                return '<a onclick="edit_category(' . $category->id . ')"  data-toggle="modal" data-target="#edit_category" rel="tooltip" title="" class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-edit f-s-25" style="font-size: x-large;margin-right: 10px"></i></a><a onclick="delete_record(' . "'" . $delete_cat . "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';

            })
            ->make(true);
    }

    public function add_category(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/category';
            $picture = 'category_' . mt_rand(100000, 999999) . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $img_url = $picture;
        } else {
            $img_url = '';
        }

        $store = new Category();
        $store->name = $request->get("name");
        $store->image = $img_url;
        $store->save();
        Session::flash("message", __('messages.Category Add Successfully'));
        return redirect()->back();
    }

    public function get_category_by_id($id)
    {
        $data = Category::find($id);
        return json_encode($data);
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        if ($data) {
            $get_recipe = Recipe::where("category_id", $id)->get();
            foreach ($get_recipe as $k) {
                Review::where("recipe_id", $k->id)->delete();
                Ingredient_info::where("recipe_id", $k->id)->delete();
                NutritionInfo::where("recipe_id", $k->id)->delete();
                $image_path = public_path() . "/upload/recipe/" . $k->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $d1 = RecipeStep::where("recipe_id", $k->id)->get();
                foreach ($d1 as $d) {
                    $image_path = public_path() . "/upload/video/" . $d->video;
                    if (file_exists($image_path)) {
                        try {
                            unlink($image_path);
                        } catch (\Exception $e) {

                        }
                    }
                    $image_path = public_path() . "/upload/thumb/" . $d->thumbnail;
                    if (file_exists($image_path)) {
                        try {
                            unlink($image_path);
                        } catch (\Exception $e) {

                        }
                    }
                    $d->delete();
                }
                $k->delete();
            }
            $image_path = public_path() . "/upload/category/" . $data->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $data->delete();
        }
        Session::flash("message", __('messages.category_del'));
        return redirect()->back();
    }

    public function update_category(Request $request)
    {
        if ($request->hasFile('image')) {
            $image_path = public_path() . "/upload/category/" . $request->get("real_img");
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/category';
            $picture = 'category_' . mt_rand(100000, 999999) . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $img_url = $picture;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        } else {
            $img_url = $request->get("real_img");
        }
        $store = Category::find($request->get("id"));
        $store->name = $request->get("name");
        $store->image = $img_url;
        $store->save();
        Session::flash("message", __('messages.Category Edit Successfully'));
        return redirect()->back();
    }
}
