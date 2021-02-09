<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Model\Review;
use App\Model\Recipe;
use Session;
use DataTables;
use Auth;
class reviewController extends Controller
{

    public function index()
    {
        return view("admin.review.default");
    }

    public function review_datatable()
    {
        $review = Review::all();
        return DataTables::of($review)
            ->editColumn('id', function ($review) {
                return $review->id;
            })
            ->editColumn('recipe_name', function ($review) {
                $data = Recipe::find($review->recipe_id);
                if ($data) {
                    return $data->name;
                }
            })
            ->editColumn('user_name', function ($review) {
                $data = User::find($review->user_id);
                if ($data) {
                    return $data->name;
                }
            })
            ->editColumn('review', function ($review) {
                return $review->review;
            })
            ->editColumn('ratting', function ($review) {
                return $review->ratting;
            })
            ->editColumn('action', function ($review) {
                $delete_review = url('delete_review', array('id' => $review->id));
                return '<a onclick="delete_record(' . "'" . $delete_review . "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';
            })
            ->make(true);
    }

    public function least_review_table()
    {
        $review = Review::whereDate("created_at", date('Y-m-d'))->get();

        return DataTables::of($review)
            ->editColumn('id', function ($review) {
                return $review->id;
            })
            ->editColumn('recipe_name', function ($review) {
                $data = Recipe::find($review->recipe_id);
                if ($data) {
                    return $data->name;
                }

            })
            ->editColumn('user_name', function ($review) {
                $data = User::find($review->user_id);
                if ($data) {
                    return $data->name;
                }
            })
            ->editColumn('ratting', function ($review) {
                return $review->ratting;
            })
            ->make(true);
    }

    public function delete_review($id)
    {
        $data = Review::find($id);
        if ($data) {
            $data->delete();
        }
        Session::flash("message", __('messages.review_delete'));
        return redirect()->back();
    }


}
