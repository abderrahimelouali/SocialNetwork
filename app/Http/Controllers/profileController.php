<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

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
        //validate the request
        $formFields = $request->validated();
        //hash
        $formFields['password'] = Hash::make($formFields['password']);

        //handle file upload & add image path to form fields
        $this->uploadImage($request, $formFields);

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
    public function edit(Profile $profile)
    {
        return view("profile.modify", compact('profile'));
    }
    public function update(profileRequest $request, Profile $profile)
    {
        $formFields = $request->validated();
        //hash
        $formFields['password'] = Hash::make($formFields['password']);
        //handle file upload & add image path to form fields
        $this->uploadImage($request, $formFields);
        $profile->fill($formFields)->save();
        // dd($profile);
        return redirect()->route('profiles.show', compact('profile'))
            ->with('success', 'Profile updated successfully!');
    }
    private function uploadImage(ProfileRequest $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasFile('image')) {
            return $formFields['image'] = $request->file("image")->store("images", "public");
        }
    }
}
