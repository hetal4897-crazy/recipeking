<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use DataTables;
use Auth;
use File;
class Frontcontroller extends Controller
{

    public function show_home(){
        return view("front.home");
    }
    
}
