<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        // dd(Profile::all());//for debug purpose, remove in production
        $profiles = Profile::all();
        return view('profiles',compact('profiles'));
    }
}
