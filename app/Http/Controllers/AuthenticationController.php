<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Model\Category;
use App\Model\Review;
use App\Model\Recipe;
use App\Model\Setting;
use Session;

use Auth;

class AuthenticationController extends Controller
{
    public function show_logins()
    {
        return view("admin.login");
    }

    public function post_login(Request $req)
    {
        $get_user = User::where("email", $req->get('email'))->where("password", $req->get("password"))->first();
        $get_setting = Setting::find(1);
        if ($get_user) {
            if ($get_user->user_type == '1') {
                Auth::login($get_user);
                Session::put("is_demo", $get_setting->is_demo);
                return redirect('dashboard');
            } else {
                Session::flash("message", __('messages.Login credential are wrong'));
                return redirect()->back();
            }

        } else {
            Session::flash("message", __('messages.Login credential are wrong'));
            return redirect()->back();
        }
    }

    public function show_dashboard()
    {
        $total_category = Category::where("is_deleted", '0')->get();
        $total_recipe = Recipe::where("is_approve", '1')->get();
        $total_user = User::where("user_type", "2")->get();
        $total_review = Review::get();
        return view("admin.dashboard")->with("category", count($total_category))->with("recipe", count($total_recipe))->with("total_user", count($total_user))->with("review", count($total_review));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function edit_profile()
    {
        return view('admin.update_profile');
    }

    public function privacy_policy()
    {
        return view("admin.privacy_policy");
    }

    public function update_profile(Request $request)
    {
        $getuser = User::where("email", $request->get("email"))->where("id", '!=', Auth::id())->get();
        if (!$getuser) {
            Session::flash("message1", __('messages.Email Id Already Use By Other User'));
            return redirect()->back();
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/profile';
            $picture = 'profile_' . mt_rand(100000, 999999) . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $img_url = $picture;
        } else {
            $img_url = Auth::user()->profile_pic;
        }

        $user = Auth::user();
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->profile_pic = $img_url;
        $user->save();
        Session::flash("message", __('messages.Profile Update Successfully'));
        return redirect()->back();
    }

    public function change_password(Request $request)
    {
        return view("admin.change_password");
    }

    public function check_password_same($pwd)
    {
        if ($pwd == Auth::user()->password) {
            $data = 1;
        } else {
            $data = 0;
        }
        return json_encode($data);
    }


    public function update_password(Request $request)
    {
        $user = Auth::user();
        $user->password = $request->get('npwd');
        $user->save();
        Session::flash("message", __('messages.Password Change Successfully'));
        return redirect()->back();
    }

    public function notification($act)
    {
        $data = array();
        if ($act == 1) {
            $result = $this->haveOrdersNotification();
            $order_data = $this->haveOrdersdata();
            if (isset($result)) {
                $data = array(
                    "status" => http_response_code(),
                    "request" => "success",
                    "response" => array(
                        "message" => "Request Completed Successfully",
                        "total" => $result,
                        "orderdata" => $order_data
                    )
                );
            }
            $update_notify = $this->update_notify();

        } else {
            $result = $this->haveOrdersNotification();
            $order_data = $this->haveOrdersdata();
            if (isset($result)) {
                $data = array(
                    "status" => http_response_code(),
                    "request" => "success",
                    "response" => array(
                        "message" => "Request Completed Successfully",
                        "total" => $result,
                        "orderdata" => $order_data
                    )
                );
            }
        }
        return $data;
    }

    public function haveOrdersNotification()
    {
        $order = Recipe::where("notify", '1')->get();
        return count($order);
    }

    public function haveOrdersdata()
    {
        $order = Recipe::where("notify", '1')->get();
        return count($order);
    }

    public function update_notify()
    {
        $order = Recipe::where("notify", '1')->get();
        foreach ($order as $k) {
            $k->notify = '0';
            $k->save();
        }
        return "done";
    }

    public function show_setting()
    {
        $setting = Setting::find(1);
        return view("admin.setting")->with("setting", $setting);
    }

    public function update_setting(Request $request)
    {
        $setting = Setting::find(1);
        $setting->privacy_policy = $request->get("privacy_policy");
        $setting->android_server_key = $request->get("android_server_key");
        $setting->ios_server_key = $request->get("ios_server_key");
        $setting->save();
        Session::flash("message", __('messages.Update Setting Successfully'));
        return redirect()->back();
    }
}
