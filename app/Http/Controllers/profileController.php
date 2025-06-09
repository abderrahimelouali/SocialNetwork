<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
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
    public function store(profileRequest $request)
    {
        $formFields = $request->validated();
        // dd($formFields);

        //hash
        $formFields['password'] = Hash::make($formFields['password']);

        //create profile
        Profile::create($formFields);

        //redirect
        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully!');
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')
            ->with('danger', 'Profile deleted successfully!');
    }
    public function modify(Profile $profile)
    {
        return view("profile.modify", compact('profile'));
    }
    public function update(profileRequest $request, Profile $profile)
    {
        $formFields = $request->validated();
        //hash
        $formFields['password'] = Hash::make($formFields['password']);
        $profile->fill($formFields)->save();
        // dd($profile);
        return redirect()->route('profiles.show', compact('profile'))
            ->with('success', 'Profile updated successfully!');
    }
}
