<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        // dd(Profile::all());//for debug purpose, remove in production
        $profiles = Profile::paginate(9);
        return view('profile.index', compact('profiles'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        // $profile = Profile::find($id);;
        $profile = Profile::findOrFail($id);; // this will throw a 404 error if the profile is not found
        return view('profile.show', compact('profile'));
    }
    public function create(){
        return view('profile.create');
    }
}
