<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'profile_image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'hobbies' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date']
        ]);

        $path = $request->file('profile_image')->store('profile_images', 'public');

        $profile = Profile::create([
            'user_id' => Auth::id(),
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'bio' => $request->input('bio'),
            'profile_image' => $path,
            'hobbies' => $request->input('hobbies'),
            'date_of_birth' => $request->input('date_of_birth'),
        ]);

        return redirect()->route('profiles.show', $profile)->with('success', 'Profile submitted successfully.');
    }
    public function index()
    {
        $profiles = Profile::with('user')->latest()->paginate(10);
        return view('profiles.index', compact('profiles'));
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function myProfiles()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your profiles.');
        }

        $profiles = $user->profile;

        return view('profiles.my', compact('profiles'));
    }


}
