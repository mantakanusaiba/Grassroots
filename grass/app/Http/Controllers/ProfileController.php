<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
  
    public function show()
    {
        $user = Auth::user();  
        return view('profile', compact('user'));
    }

  
    public function uploadImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        
        $image->storeAs('public/profile_images', $imageName);

       
        $user->profile_image = 'profile_images/' . $imageName;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile image updated successfully!');
    }
}

