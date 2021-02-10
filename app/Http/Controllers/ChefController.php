<?php


namespace App\Http\Controllers;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Model\Chef;
use DataTables;
use Session;
class ChefController
{

    public function  show_chef(){
         return view("admin.chef.default");
    }

    public function  chef_data_table(){
        $data = Chef::where("is_deleted",'0')->get();
        return DataTables::of($data)
            ->editColumn('id', function ($data) {
                return $data->id;
            })
            ->editColumn('image', function ($data) {
                return $data->image;
            })
            ->editColumn('name', function ($data) {
                return $data->name;
            })
            ->editColumn('email', function ($data) {
                return $data->email;
            })
            ->editColumn('phone', function ($data) {
                return $data->phone_no;
            })
            ->editColumn('address', function ($data) {
                return $data->address;
            })
            ->editColumn('about', function ($data) {
                return $data->about_us;
            })
            ->editColumn('action', function ($data) {
                $delete_cat = url('delete_chef', array('id' => $data->id));
                $edit = url('save_chef', array('id' => $data->id));
                return '<a href="'.$edit.'" rel="tooltip" title="" class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-edit f-s-25" style="font-size: x-large;margin-right: 10px"></i></a><a onclick="delete_record(' . "'" . $delete_cat . "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';

            })
            ->make(true);
    }

    public function save_chef($id){
        $data = Chef::find($id);
        return view("admin.chef.save_chef")->with("data",$data)->with("id",$id);
    }

    public function  update_chef(Request $request){
        //dd($request->all());
        if($request->get("id")==0){
            $get_email = Chef::where("email",$request->get("email"))->first();
            if($get_email){
                Session::flash("message1", __('messages.Email Id Already Use By Other Chef'));
                Session::flash("alert","danger");
                return redirect()->back();
            }
            $data = new Chef();
            $old_img = "";
            $img_url = "";
            $msg = __("messages.Chef Add Successfully");
        }else{
            $data = Chef::find($request->get("id"));
            $old_img = $data->image;
            $img_url = $data->image;
            $msg = __("messages.Chef Update Successfully");
        }
        if ($request->hasFile('image')) {
            $image_path = public_path() . "/upload/chef/" . $request->get("real_img");
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/chef';
            $picture = 'chef_' . mt_rand(100000, 999999) . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $img_url = $picture;
            if (file_exists($image_path)&&$old_img!="") {
                unlink($image_path);
            }
        }
        $data->name = $request->get("name");
        $data->email = $request->get("email");
        $data->address = $request->get("address");
        $data->about_us = $request->get("about");
        $data->phone_no = $request->get("phone");
        $data->image = $img_url;
        $data->save();
        Session::flash("message1",$msg);
        Session::flash("alert","success");
        return redirect()->back();
    }

}
