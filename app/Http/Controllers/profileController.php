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
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }
    public function create()
    {
        return view('profile.create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:profiles,email',
            'password' => 'required|min:6|max:20',
            'bio' => 'nullable|max:255',
        ]);
        Profile::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password), // Encrypt the password
            'bio' => $bio,
            //or use $request->post() to get all fields اختصار
        ]);
        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully!');
        dd('store method called');
        //Redirect
        //Redirect()->route(...)
        //redirect()->action(...)
        //redirect()->back(...)//to redirect back to the previous page
        //back()// to redirect back
        //back()->withInput() // to redirect back with old input
    }
}
