<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            //validation rules
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:profiles,email',
            'password' => 'required|min:6|max:20|confirmed',
            'bio' => 'nullable|max:255',
        ]);
        Profile::create([
            'name' => $name,
            'email' => $email,
            // 'password' => bcrypt($password),// ❌ Not recommended, use Hash::make instead
            'password' =>Hash::make($password),// ✅ Best practice
            'bio' => $bio,
        ]);
        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully!');
    }
}
